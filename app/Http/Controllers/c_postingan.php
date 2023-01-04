<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paket;
use App\Models\fasilitas_wisata;
use App\Models\jam_buka;
use App\Models\fotowisata;
use App\Models\wisata;
use App\Models\mitra;


class c_postingan extends Controller
{
    public function __construct()
    {
        $this->mitra = new mitra();
        $this->paket = new paket();
        $this->fasilitas_wisata = new fasilitas_wisata();
        $this->jam_buka = new jam_buka();
        $this->fotowisata = new fotowisata();
        $this->wisata = new wisata();
    }

    public function index()
    {
        $data = ['mitra' => $this->mitra->allData(),];
        return view('mitra.postingan.index', $data);
    }

    public function postingan($id_mitra)
    {
        $data = ['wisata' => $this->wisata->mitraData($id_mitra),
                 'id_mitra' => $id_mitra,];
        return view('mitra.postingan.wisata', $data);
    }

    public function create($id_mitra)
    {
        return view('mitra.postingan.create', $id_mitra);
    }

    public function store(Request $request, $id_mitra)
    {
        $j = $this->wisata->jumlahData();
        $id = $j + +1;
        $data = [
            'id_wisata' => $id,
            'id_mitra' => $id_mitra,
            'wisata' => $request->wisata,
            'id_kategori' => $request->id_kategori,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
        ];
        $this->wisata->addData($data);
        for ($i=0; $i < $request->jf; $i++) { 
            $data = [
                'id_wisata' => $id,
                'id_fasilitas' => $request->{$i."id_fasilitas"},
            ];
            $this->fasilitas_wisata->addData($data);
        }
        for ($i=0; $i < 7; $i++) { 
            $data = [
                'id_wisata' => $id,
                'hari' => $i+1,
                'jam_buka' => $request->{$i."jam_buka"},
                'jam_tutup' => $request->{$i."jam_tutup"},
            ];
            $this->jam_buka->addData($data);
        }
        for ($i=0; $i < $request->jft; $i++) { 
            $file  = $request->fotowisata[$i];
            $filename = $request->wisata.$i.'.'.$file->extension();
            $file->move(public_path('fotowisata'),$filename);
            $data = [
                'id_wisata' => $id,
                'fotowisata' => $filename,
            ];
            $this->fotowisata->addData($data);
        }
        for ($i=0; $i < $request->jp; $i++) { 
            $fitur = $request->{"fitur".$i};
            if ($request->{"jftr".$i} <> 1) {
            for ($j=1; $j < $request->{"jftr".$i} ; $j++) { 
                $fitur = $fitur."+".$request->{"fitur".$i.$j};
            }
            }
            $data = [
                'id_wisata' => $id,
                'fitur' => $fitur,
                'paket' => $request->{"paket".$i},
                'harga_wday' => $request->{"harga_wday".$i},
                'harga_wend' => $request->{"harga_wend".$i},
            ];
            $this->paket->addData($data);
        }
    }


}