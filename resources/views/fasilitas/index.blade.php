@extends('layouts.template')
@section('content')
{{-- <a href="#"> <i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a> --}}
<div class="container">
<h3>Daftar Fasilitas Postingan</h3>
    <div class="col mt-4">
        <a href="{{route('datamaster.fasilitas.create')}}" class="btn btn-primary">Create Fasilitas</a>
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
                            <th>Nama Fasilitas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fasilitas as $fst)
                        <tr>
                            <td>{{$fst->fasilitas}}</td>
                            <td>
                                <a href="{{route('datamaster.fasilitas.edit', $fst->id_fasilitas) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{route('datamaster.fasilitas.destroy', $fst->id_fasilitas) }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
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