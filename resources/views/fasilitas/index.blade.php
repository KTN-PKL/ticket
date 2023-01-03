@extends('layouts.template')
@section('content')

<div class="container">
<h3>Daftar Fasilitas Postingan</h3>
    <div class="col mt-4">
        <a href="{{route('fasilitas.create')}}" class="btn btn-primary">Create Fasilitas</a>
    </div>
    <br>
    <section class="section">
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
                                <a href="{{route('fasilitas.edit', $fst->id_fasilitas) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{route('fasilitas.destroy', $fst->id_fasilitas) }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
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