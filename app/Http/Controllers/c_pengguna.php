<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengguna;
use Illuminate\Support\Facades\Hash;

class c_pengguna extends Controller
{
    public function __construct()
    {
        $this->pengguna = new pengguna();
    }

    public function index()
    {
        $data = ['pengguna' => $this->pengguna->allData(),];
        return view('pengguna.index', $data);
    }

    public function create()
    {
        return view('pengguna.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'password' => 'confirmed',
            'username' => 'required',
            'email' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg|max:2048',
        ],[
            'foto.max' => 'Maksimal ukuran foto 2048 MB',
            'foto.mimes' => 'Format Foto jpg, png, atau jpeg',
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
            'level' => "pengguna",
            'account' => "active",
        ];
        $this->pengguna->addDataUser($data);
        $user = $this->pengguna->id($request->email);
        $data = ['id_pengguna' => $user->id,];
        $this->pengguna->addDatapengguna($data);
        return redirect()->route('pengguna')->with('success', 'Pengguna Berhasil Dibuat');
    }

    public function edit($id_pengguna)
    {
        $data = ['pengguna' => $this->pengguna->detailData($id_pengguna),];
        return view('pengguna.edit', $data);
    }

    public function update(Request $request, $id_pengguna)
    {
        if ($request->foto <> null) {
            $file  = $request->foto;
            $filename = $request->email.'.'.$file->extension();
            $file->move(public_path('foto'),$filename);
            $data = ['foto' => $filename,];
            $this->pengguna->editUser($id_pengguna, $data);
        }
        if ($request->password <> null) {
            $data = ['password' => Hash::make($request->password),];
            $this->pengguna->editUser($id_pengguna, $data);
        }
        $data = [
            'name' => $request->name,
            'kontak' => $request->kontak,
        ];
        $this->pengguna->editUser($id_pengguna, $data);
        return redirect()->route('pengguna')->with('success', 'Pengguna Berhasil Diupdate');
    }

    public function inactive($id_pengguna)
    {
        $data = ['account' => "inactive"];
        $this->pengguna->editUser($id_pengguna, $data);
        return redirect()->route('pengguna')->with('success', 'Status Pengguna Dimatikan');
    }

    public function detail($id_pengguna)
    {
        $data = ['pengguna' => $this->pengguna->detailData($id_pengguna),];
        return view('pengguna.detail', $data);
    }

    public function active($id_pengguna)
    {
        $data = ['account' => "active"];
        $this->pengguna->editUser($id_pengguna, $data);
        return redirect()->route('pengguna')->with('success', 'Status Pengguna Diaktifkan');
    }

    public function destroy($id_pengguna)
    {
        $cek = $this->pengguna->detailData($id_pengguna);
        unlink(public_path('foto'). '/' .$cek->foto);
        $this->pengguna->deleteUser($id_pengguna);
        $this->pengguna->deletepengguna($id_pengguna);
        return redirect()->route('pengguna')->with('success', 'pengguna Berhasil Dihapus');
    }
}
