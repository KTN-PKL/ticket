<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita_informasi;

class c_beritainformasi extends Controller
{
    public function __construct()
    {
        $this->berita_informasi = new berita_informasi();
    }
    public function index()
    {
        $data = ['berinfo' => $this->berita_informasi->allData(),];
        return view('berinfo.index', $data);
    }
    public function create()
    {
        return view('berinfo.create');
    }
    public function store(Request $request)
    {
        $file  = $request->gambar;
        $filename = $request->judul.'.'.$file->extension();
        $file->move(public_path('gambar'),$filename);
        $data = [
           'judsul' => $request->judul,
           'isi' => $request->isi,
           'gambar' => $filename,
           'jenis' => $request->jenis,
           'statusbi' => "aktiv",
        ];
        $this->berita_informasi->addData($data);
        return redirect()->route('berinfo.index');
    }
    public function edit($id_beritainformasi)
    {
        $data = ['berinfo' => $this->berita_informasi->detailData($id_beritainformasi),];
        return view('berinfo.create', $data);
    }
    public function update(Request $request, $id_beritainformasi)
    {
        $file  = $request->gambar;
        $filename = $request->judul.'.'.$file->extension();
        $file->move(public_path('gambar'),$filename);
        $data = [
           'judsul' => $request->judul,
           'isi' => $request->isi,
           'gambar' => $filename,
           'jenis' => $request->jenis,
           'statusbi' => "aktiv",
        ];
        $this->berita_informasi->editData($data, $id_beritainformasi);
        return redirect()->route('berinfo.index');
    }
    public function aktiv($id_beritainformasi)
    {
        $data = [
           'statusbi' => "aktiv",
        ];
        $this->berita_informasi->editData($data, $id_beritainformasi);
        return redirect()->route('berinfo.index');
    }
    public function nonaktiv($id_beritainformasi)
    {
        $data = [
           'statusbi' => "nonaktiv",
        ];
        $this->berita_informasi->editData($data, $id_beritainformasi);
        return redirect()->route('berinfo.index');
    }
}
