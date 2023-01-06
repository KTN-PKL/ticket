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
           'judul' => $request->judul,
           'isi' => $request->isi,
           'gambar' => $filename,
           'jenis' => $request->jenis,
           'statusbi' => "Active",
        ];
        $this->berita_informasi->addData($data);
        return redirect()->route('berinfo')->with('success', 'Berita & Informasi Berhasil Dibuat.');;
    }
    public function edit($id_beritainformasi)
    {
        $data = ['berinfo' => $this->berita_informasi->detailData($id_beritainformasi),];
        return view('berinfo.edit', $data);
    }

    public function detail($id_beritainformasi)
    {
        $data = [
            'berinfo' => $this->berita_informasi->detailData($id_beritainformasi,)
        ];
        return view('berinfo.detail', $data);
    }
    public function update(Request $request, $id_beritainformasi)
    {
        if ($request->gambar <> null){
            $file  = $request->gambar;
            $filename = $request->judul.'.'.$file->extension();
            $file->move(public_path('gambar'),$filename);
            $data = [
               'judul' => $request->judul,
               'isi' => $request->isi,
               'gambar' => $filename,
               'jenis' => $request->jenis,
               'statusbi' => "Active",
            ];
            $this->berita_informasi->editData($id_beritainformasi ,$data );
        }
        else{
            $data = [
                'judul' => $request->judul,
                'isi' => $request->isi,
                'jenis' => $request->jenis,
                'statusbi' => "Active",
             ];
             $this->berita_informasi->editData($id_beritainformasi ,$data );
        }
       
        return redirect()->route('berinfo')->with('success','Berita & Informasi Berhasil Diupdate.');
    }

    public function destroy($id_beritainformasi)
    {
        $this->berita_informasi->deleteData($id_beritainformasi);
        return redirect()->route('berinfo')->with('success', 'Berita & Informasi Berhasil Dihapus.');
    }

    public function active($id_beritainformasi)
    {
        $data = [
           'statusbi' => "Active",
        ];
        $this->berita_informasi->editData($id_beritainformasi, $data);
        return redirect()->route('berinfo')->with('success', 'Berita & Informasi Diaktifkan.');;
    }
    public function inactive($id_beritainformasi)
    {
        $data = [
           'statusbi' => "Inactive",
        ];
        $this->berita_informasi->editData($id_beritainformasi, $data);
        return redirect()->route('berinfo')->with('success', 'Berita & Informasi Berhasil Dimatikan.');;
    }
}
