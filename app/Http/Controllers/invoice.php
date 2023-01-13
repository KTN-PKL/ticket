<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembayaran;
use App\Models\pesan_masif;
use App\Services\Midtrans\CreateSnapTokenService;
use Midtrans\Config;
use Midtrans\Snap;

class invoice extends Controller
{
    protected $serverKey;
	protected $isProduction;
	protected $isSanitized;
	protected $is3ds;

    public function __construct()
    {
        $this->serverKey = config('midtrans.server_key');
		$this->isProduction = config('midtrans.is_production');
		$this->isSanitized = config('midtrans.is_sanitized');
		$this->is3ds = config('midtrans.is_3ds');

		$this->_configureMidtrans();
        $this->pesan_masif = new pesan_masif();
        $this->pembayaran = new pembayaran();
    }

    public function _configureMidtrans()
	{
		Config::$serverKey = $this->serverKey;
		Config::$isProduction = $this->isProduction;
		Config::$isSanitized = $this->isSanitized;
		Config::$is3ds = $this->is3ds;
	}
    public function getSnapToken($id)
	{
		$pembayaran = $this->pembayaran->detailData($id);
		$params = [
			/**
			 * 'order_id' => id order unik yang akan digunakan sebagai "primary key" oleh Midtrans untuk
			 * 				 membedakan order satu dengan order lain. Key ini harus unik (tidak boleh ada duplikat).
			 * 'gross_amount' => merupakan total harga yang harus dibayar customer.
			 */
			'transaction_details' => [
				'order_id' => $id,
				'gross_amount' => $pembayaran->total_harga,
			],
			/**
			 * 'item_details' bisa diisi dengan detail item dalam order.
			 * Umumnya, data ini diambil dari tabel `order_items`.
			 */
			// 'item_details' => [
			// 	[
			// 		'id' => 1, // primary key produk
			// 		'price' => '150000', // harga satuan produk
			// 		'quantity' => 1, // kuantitas pembelian
			// 		'name' => 'Flashdisk Toshiba 32GB', // nama produk
			// 	],
			// 	[
			// 		'id' => 2,
			// 		'price' => '60000',
			// 		'quantity' => 2,
			// 		'name' => 'Memory Card VGEN 4GB',
			// 	],
			// ],
			'customer_details' => [
				// Key `customer_details` dapat diisi dengan data customer yang melakukan order.
				'first_name' => $pembayaran->name,
				'email' => $pembayaran->email,
				'phone' => $pembayaran->kontak,
			]
		];
		
		$snapToken = Snap::getSnapToken($params);
		return $snapToken;
	}
    public function store($id_masif)
    {
        $id = $this->pembayaran->id();
        $id_pem = $id + 1;
		$id_pembayaran = "A".$id_pem;
        $masif = $this->pesan_masif->detailData($id_masif);
        $total = $masif->qty * $masif->harga;
        $data = [
            'id_pembayaran' => $id_pembayaran,
            'id_pengguna' => $masif->id_pengguna,
            'id_paket' => $masif->id_paket,
            'email' => $masif->email,
            'qty' => $masif->qty,
            'total_harga' => $total,
            'status' => "tertunda",
			'jenis' => "masif",
        ];
        $this->pembayaran->addData($data);
		$midtrans = $this->getSnapToken($id_pembayaran);
		$data = ['snap_token' => $midtrans,];
		$this->pembayaran->editData($id_pembayaran, $data);
		$data = ['stat' => "accepted",];
		$this->pesan_masif->editData($id_masif, $data);
		return redirect()->route('invoice.show', $id_pembayaran);
    }
	public function show($id_pembayaran)
	{
		$data = ['pembayaran' => $this->pembayaran->detailData($id_pembayaran),];
		return view('invoice.show', $data);
	}
    public function callback(Request $request)
    {
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$this->serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == "capture") {
                $data = ['status' => "lunas"];
                $this->pembayaran->editData($request->order_id, $data);
            }
        }
    }
}
