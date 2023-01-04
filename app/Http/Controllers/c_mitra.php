<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mitra;
use Illuminate\Support\Facades\Hash;

class c_mitra extends Controller
{
    public function __construct()
    {
        $this->mitra = new mitra();
    }

    public function index()
    {
        $data = ['mitra' => $this->mitra->allData(),];
        return view('mitra.akun.index', $data);
    }

    public function create()
    {
        return view('mitra.akun.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required|confirmed',
            'username' => 'required|unique',
            'email' => 'required|unique',
            'kontak' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg|max:2048',
        ],[
            'name.required'=>'Nama Mitra Wajib terisi',
           
        ]);
        $file  = $request->foto;
        $filename = $request->email.'.'.$file->extension();
        $file->move(public_path('foto'),$filename);
        $data = [
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'email' => $request->email,
            'kontak' => $request->kontak,
            'foto' => $filename,
            'level' => "mitra",
            'status' => "active",
        ];
        $this->mitra->addDataUser($data);
        $user = $this->mitra->id($request->email);
        $data = [
            'id_mitra' => $user->id,
            'deskripsi_mitra' => $request->deskripsi_mitra,
            'balance' => 0,
        ];
        $this->mitra->addDataMitra($data);
        return redirect()->route('mitra.akun')->with('create', 'Mitra Berhasil Dibuat');
    }

    public function edit($id_mitra)
    {
        $data = ['mitra' => $this->mitra->detailData($id_mitra),];
        return view('mitra.akun.edit', $data);
    }

    public function update(Request $request, $id_mitra)
    {
        if ($request->foto <> null) {
            $file  = $request->foto;
            $filename = $request->email.'.'.$file->extension();
            $file->move(public_path('foto'),$filename);
            $data = ['foto' => $filename,];
            $this->mitra->editUser($id_mitra, $data);
        }
        $data = [
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'kontak' => $request->kontak,
        ];
        $this->mitra->editUser($id_mitra, $data);
        $data = [
            'deskripsi_mitra' => $request->deskripsi_mitra,
        ];
        $this->mitra->editMitra($id_mitra, $data);
        return redirect()->route('mitra.akun')->with('create', 'Mitra Berhasil Dibuat');
    }

    public function inactive($id_mitra)
    {
        $data = ['status' => "inactive"];
        $this->mitra->editUser($id_mitra, $data);
        return redirect()->route('mitra.akun')->with('create', 'Mitra Berhasil Dibuat');
    }

    public function detail($id_mitra)
    {
        $data = ['mitra' => $this->mitra->detailData($id_mitra),];
        return view('mitra.akun.detail', $data);
    }

    public function active($id_mitra)
    {
        $data = ['status' => "active"];
        $this->mitra->editUser($id_mitra, $data);
        return redirect()->route('mitra.akun')->with('create', 'Mitra Berhasil Dibuat');
    }

    public function destroy($id_mitra)
    {
        $cek = $this->mitra->detailData($id_mitra);
        unlink(public_path('foto'). '/' .$cek->foto);
        $this->mitra->deleteUser($id_mitra);
        $this->mitra->deleteMitra($id_mitra);
        return redirect()->route('mitra.akun')->with('create', 'Mitra Berhasil Dibuat');
    }
}
