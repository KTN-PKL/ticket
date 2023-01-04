@extends('layouts.template')
@section('content')
<div class="col">
    <a href="{{route('mitra')}}"> <i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
</div>
<br>
<div class="container mt-4">
   
<h3>Daftar Postingan Mitra {{$mitra->name}} </h3>
<div class="col mt-4">
    <a href="{{route('mitra.postingan.create', $mitra->id_mitra)}}" class="btn btn-primary">Create Postingan</a>
</div>
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
                        @php
                        $i=0;
                        @endphp
                        @foreach($wisata as $wisatas)
                        @php
                        $i=$i+1;
                        @endphp

                        <tr>
                            <td style="width:7%">{{$i}}</td>
                            <td style="width:25%">{{$wisatas->wisata}}</td>
                            <td >{{$wisatas->kategori}}</td>
                            <td >{{$wisatas->lokasi}}</td>
                            <td >5,0</td>
                            <td>
                                <a href="{{route('mitra.postingan.detail', $wisatas->id_wisata)}}" class="btn btn-success"><i class="bi bi-eye"></i></a>
                                <a href="{{route('mitra.postingan.edit', $wisatas->id_mitra) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{route('mitra.postingan.destroy', $wisatas->id_wisata) }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
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