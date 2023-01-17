@extends('layouts.template')
@section('content')
{{-- <a href="#"> <i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a> --}}
<div class="container">
<h3>Daftar Fasilitas Postingan</h3>
    <div class="col mt-4">
        <a href="{{route('datamaster.discount.create')}}" class="btn btn-primary">Create Discount</a>
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
                            <th>Nama Wisata</th>
                            <th>Nama Paket</th>
                            <th>Jenis Dicount</th>
                            <th>Dicount</th>
                            <th>Status Discount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($discount as $item)
                        <tr>
                            <td>{{$item->wisata}}</td>
                            <td>{{$item->paket}}</td>
                            <td>{{$item->jenis}}</td>
                            <td>{{$item->discount}}</td>
                            <td>{{$item->aktif}}</td>
                            <td>
                                <a href="{{route('datamaster.discount.edit', $item->id_discount) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{route('datamaster.discount.destroy', $item->id_discount) }}" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                                @if ($item->aktif == "aktif")
                                <a href="{{route('datamaster.discount.inaktif', $item->id_discount) }}" class="btn btn-sm btn-warning">inaktif</a>
                                @else
                                <a href="{{route('datamaster.discount.aktif', $item->id_discount) }}" class="btn btn-sm btn-success">aktif</a> 
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