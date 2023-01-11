@extends('layouts.template')
@section('content')

<div class="container">
<h3>Daftar User</h3>
    <div class="col mt-4">
        <a href="{{route('pengguna.create')}}" class="btn btn-primary">Create User</a>
    </div>
    <br>
    <section class="section">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Whatsapp</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=0;
                        @endphp
                        @foreach($pengguna as $penggunas)
                        @php
                        $i=$i+1
                        @endphp
                        <tr>
                            <td>{{$i}}</td>
                            <td style="width:20%">{{$penggunas->name}}</td>
                            <td style="width:20%">{{$penggunas->email}}</td>
                            <td>{{$penggunas->kontak}}</td>
                            <td>
                                @if($penggunas->status == "active")
                                <span class="badge bg-success"><i style="font-size: 18px" class="bi bi-patch-check"></i> Active</span>
                                @elseif($penggunas->status == "inactive")
                                <span class="badge bg-danger"><i style="font-size: 18px" class="bi bi-x-circle"></i> Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('pengguna.detail', $penggunas->id_pengguna)}}" class="btn btn-success"><i class="bi bi-eye"></i></a>
                                <a href="{{route('pengguna.edit', $penggunas->id_pengguna)}}"class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{route('pengguna.destroy', $penggunas->id_pengguna)}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                @if($penggunas->status == "active")
                                <a href="{{route('pengguna.inactive', $penggunas->id_pengguna)}}" class="btn btn-danger">Inactive</a>
                                @else
                                <a href="{{route('pengguna.active', $penggunas->id_pengguna)}}" class="btn btn-success">Active</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    
</div>

@endsection