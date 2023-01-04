<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paket;
use App\Models\fasilitas_wisata;
use App\Models\jam_buka;
use App\Models\fotowisata;
use App\Models\wisata;
use App\Models\mitra;
use App\Models\kategori;
use App\Models\fasilitas;


class c_postingan extends Controller
{
    public function __construct()
    {
        $this->fasilitas = new fasilitas();
        $this->paket = new paket();
        $this->fasilitas_wisata = new fasilitas_wisata();
        $this->jam_buka = new jam_buka();
        $this->fotowisata = new fotowisata();
        $this->wisata = new wisata();
        $this->mitra = new mitra();
        $this->kategori = new kategori();
    }

    public function index()
    {
        $data = ['mitra' => $this->mitra->allData(),];
        return view('mitra.postingan.index', $data);
    }

    public function postingan($id_mitra)
    {
        $data = ['wisata' => $this->wisata->mitraData($id_mitra),
                 'mitra' => $this->mitra->detailData($id_mitra),];
        return view('mitra.postingan.wisata', $data);
    }

    public function create($id_mitra)
    {
        $data =['id' => $id_mitra,
                'kategori' => $this->kategori->allData(),
                'fasilitas' => $this->fasilitas->allData(),
                'mitra' => $this->mitra->detailData($id_mitra),];
        return view('mitra.postingan.create',$data);
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
        $i = 0;
        foreach ($request->fotowisata as $fwsata) {
            $file  = $fwsata;
            $filename = $request->wisata.$i.'.'.$file->extension();
            $file->move(public_path('fotowisata'),$filename);
            $data = [
                'id_wisata' => $id,
                'fotowisata' => $filename,
            ];
            $this->fotowisata->addData($data);
        $i = $i + 1;
        }
        for ($i=0; $i < $request->jp; $i++) { 
            $fitur = $request->{"fitur".$i};
            if ($request->{"jftr".$i} <> 1) {
            for ($j=1; $j < $request->{"jftr".$i} ; $j++) { 
                $fitur = $fitur."+".$request->{"fitur".$i."-".$j};
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
        return redirect()->route('mitra.postingan')->with('create', 'Mitra Berhasil Dibuat');
    }

    public function edit($id_wisata)
    {
        $data = [
            'wisata' => $this->wisata->detailData($id_wisata),
            'fasilitas_wisata' => $this->fasilitas_wisata->wisataData($id_wisata),
            'jam_buka' => $this->jam_buka->wisataData($id_wisata),
            'fotowisata' => $this->fotowisata->wisataData($id_wisata),
            'paket' => $this->paket->wisataData($id_wisata),
        ];
        return view('mitra.postingan.edit', $data);
    }

    public function detail($id_wisata)
    {
        $data = [
            'wisata' => $this->wisata->detailData($id_wisata),
            'fasilitas_wisata' => $this->fasilitas_wisata->wisataData($id_wisata),
            'jam_buka' => $this->jam_buka->wisataData($id_wisata),
            'fotowisata' => $this->fotowisata->wisataData($id_wisata),
            'paket' => $this->paket->wisataData($id_wisata),
            'kategori' => $this->kategori->allData(),
            'fasilitas' => $this->fasilitas->allData(),
            'mitra' => $this->mitra->detailData($id_wisata),
        ];
        return view('mitra.postingan.detail', $data);
    }

    public function update($id_wisata)
    {
        $data = [
            'wisata' => $request->wisata,
            'id_kategori' => $request->id_kategori,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
        ];
        $this->wisata->editData($id_wisata, $data);
        $this->fasilitas_wisata->deleteData($id_wisata);
        for ($i=0; $i < $request->jf; $i++) { 
            $data = [
                'id_wisata' => $id_wisata,
                'id_fasilitas' => $request->{$i."id_fasilitas"},
            ];
            $this->fasilitas_wisata->addData($data);
        }
        $jb = $this->jam_buka->wisataData($id_wisata);
        $i = 0;
        foreach ($jb as $jamb) {
            $data = [
                'jam_buka' => $request->{$i."jam_buka"},
                'jam_tutup' => $request->{$i."jam_tutup"},
            ];
            $i = $i +1;
            $this->jam_buka->addData($jamb->id_jambuka, $data);
        }
        if ($request->fotowisata[0] <> null) {
            $fw = $this->jfotowisata->wisataData($id_wisata);
            foreach ($fw as $fotow) {
                unlink(public_path('fotowisata'). '/' .$fotow->fotowisata);
            }
            $this->fotowisata->deleteData($id_wisata);
            $i = 0;
            foreach ($request->fotowisata as $fwsata) {
                $file  = $fwsata;
                $filename = $request->wisata.$i.'.'.$file->extension();
                $file->move(public_path('fotowisata'),$filename);
                $data = [
                    'id_wisata' => $id,
                    'fotowisata' => $filename,
                ];
                $this->fotowisata->addData($data);
            $i = $i + 1;
            }
        }
        $paket= $this->paket->wisataData($id_wisata);
        $i = 0;
        foreach ($variable as $key => $value) {  
        if ($i < $request->jp) {
            $fitur = $request->{"fitur".$i};
            if ($request->{"jftr".$i} <> 1) {
            for ($j=1; $j < $request->{"jftr".$i} ; $j++) { 
                $fitur = $fitur."+".$request->{"fitur".$i."-".$j};
            }
            }
            $data = [
                'fitur' => $fitur,
                'paket' => $request->{"paket".$i},
                'harga_wday' => $request->{"harga_wday".$i},
                'harga_wend' => $request->{"harga_wend".$i},
            ];
            $this->paket->edirData($id_paket, $data);
        } else {
            $this->paket->deleteData($id_paket);
        }
        $i = $i + 1;
        }
        return redirect()->route('mitra.postingan')->with('create', 'Mitra Berhasil Dibuat');
    }
    public function destroy($id_wisata)
    {
        $fw = $this->fotowisata->wisataData($id_wisata);
        foreach ($fw as $fotow) {
            unlink(public_path('fotowisata'). '/' .$fotow->fotowisata);
        }
        $this->fotowisata->deleteData($id_wisata);
        $this->fasilitas_wisata->deleteData($id_wisata);
        $this->jam_buka->deleteData($id_wisata);
        $this->paket->deleteData2($id_wisata);
        $this->wisata->deleteData($id_wisata);
    }
}
