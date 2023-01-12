@extends('layouts.template')
@section('content')
{{-- <a href="{{route('mitra.postingan', $)}}"> <i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a> --}}
<div class="container">
<h3>Daftar Tiket Normal</h3>
    <div class="col mt-4">
        <a href="{{route('tiketnormal.create')}}" class="btn btn-primary">Create Tiket</a>
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
                            <th>Tujuan Wisata</th>
                            <th>Whatsapp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     <tr>
                        @foreach($pesan_tiket as $tiket)
                        <td>1</td>
                        <td>{{$tiket->atas_nama}}</td>
                        <td>{{$tiket->wisata}}</td>
                        <td>{{$tiket->whatsapp}}</td>
                        <td>
                            Action
                        </td>
                        @endforeach
                       
                     </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    
</div>

@endsection