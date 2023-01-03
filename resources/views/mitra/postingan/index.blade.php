@extends('layouts.template')
@section('content')

<div class="container">
<h3>Daftar Postingan Mitra</h3>
    <br>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama Mitra</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>Sari Ater Corp</td>
                        {{-- @foreach($mitra as $mitras)
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
                            </td> --}}
                            <td>
                                <a href="#" class="btn btn-primary">Lihat Postingan</a>
                              
                            </td>
                          
                        </tr>
                       {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    
</div>

@endsection