@extends('layouts.template')
@section('content')

<div class="container">
<h3>Daftar Akun Mitra</h3>
    <div class="col mt-4">
        <a href="{{route('mitra.akun.create')}}" class="btn btn-primary">Create Mitra</a>
    </div>
    <br>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email Mitra</th>
                            <th>Username</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mitra as $mitras)
                        <tr>
                            <td>{{$mitras->name}}</td>
                            <td>{{$mitras->email}}</td>
                            <td>{{$mitras->username}}</td>
                            <td>
                                @if ($mitras->status == "active")
                                <span class="badge bg-success">Active</span>
                                @else
                                <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('mitra.akun.detail', $mitras->id_mitra)}}" class="btn btn-success"><i class="bi bi-eye"></i></a>
                                <a href="{{route('mitra.akun.edit', $mitras->id_mitra) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                <a href="#" class="btn btn-danger">Inactive</a>
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