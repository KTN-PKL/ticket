@extends('layouts.template')
@section('content')

<div class="container">
<h3>Daftar Kategori Postingan</h3>
    <div class="col mt-4">
        <a href="{{route('kategori.create')}}" class="btn btn-primary">Create Kategori</a>
    </div>
    <br>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategori as $kategoris)
                        <tr>
                            <td>{{$kategoris->kategori}}</td>
                            <td>
                                <a href="{{route('kategori.edit', $kategoris->id_kategori) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{route('kategori.destroy', $kategoris->id_kategori) }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
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