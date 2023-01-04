@extends('layouts.template')
@section('content')

<div class="container">
<h3>Daftar Postingan Mitra </h3>
    <br>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Wisata</th>
                            <th>Kategori</th>
                            <th>Alamat</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($wisata as $wisatas)
                        <tr>
                            <td style="width:7%">1</td>
                            <td style="width:25%">{{$wisatas->wisata}}</td>
                            <td >{{$wisatas->kategori}}</td>
                            <td >{{$wisatas->lokasi}}</td>
                            <td >5,0</td>
                            <td>
                                <a href="{{route('mitra.postingan.detail', $wisatas->id_mitra)}}" class="btn btn-success"><i class="bi bi-eye"></i></a>
                                <a href="{{route('mitra.postingan.edit', $wisatas->id_mitra) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{route('mitra.postingan.destroy', $wisatas->id_mitra) }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                       {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    
</div>

@endsection