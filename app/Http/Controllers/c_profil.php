<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;
use auth;

class c_profil extends Controller
{
    public function __construct()
    {
        $this->admin = new admin();
    }

    public function index()
    {
        $id = auth()->user()->id;
        $data = ['admin' => $this->admin->detailData($id),];
        return view('profil.index', $data);
    }
    
    public function edit(){
        $id = auth()->user()->id;
        $data = ['admin' => $this->admin->detailData($id),];
        return view('profil.edit', $data);
    }
    public function update(Request $request, $id_admin)
    {
        $id_admin = auth()->user()->id;
        if ($request->foto <> null) {
            $file  = $request->foto;
            $filename = $request->email.'.'.$file->extension();
            $file->move(public_path('foto'),$filename);
            $data = ['foto' => $filename,];
            $this->admin->editProfil($id_admin, $data);
        }
        $data = [
            'name' => $request->name,
            'kontak' => $request->kontak,
        ];
        $this->admin->editProfil($id_admin, $data);

        $data2 = [
            'posisi' => $request->posisi,
        ];
        $this->admin->editPosisi($id_admin, $data2);
        return redirect()->route('profil')->with('create', 'admin Berhasil Dibuat');
    }

    public function keamanan(){
        $id = auth()->user()->id;
        $data = ['admin' => $this->admin->detailData($id),];
        return view('profil.keamanan', $data);
    }

    public function update2(Request $request, $id_admin)
    {
        if ($request->password <> null) {
            $data = ['password' => Hash::make($request->password),];
            $this->admin->editProfil($id_admin, $data);
            return redirect()->route('profil')->with('success', 'Password berhasil diubah');
        }
    }
}
