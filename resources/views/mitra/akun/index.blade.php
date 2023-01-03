@extends('layouts.template')
@section('content')

<div class="container">
<h3>Daftar Akun Mitra</h3>
    <div class="col mt-4">
        <a href="{{route('mitra/akun/create')}}" class="btn btn-primary">Create Mitra</a>
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
                        <tr>
                            <td>Sari Ater Corp</td>
                            <td>sariater@gmail.com</td>
                            <td>sariater01</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-success"><i class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                <a href="#" class="btn btn-danger">Inactive</a>
                            </td>
                          
                        </tr>
                        <tr>
                            <td>Sari Ater Corp</td>
                            <td>sariater@gmail.com</td>
                            <td>sariater01</td>
                            <td>
                                <span class="badge bg-danger">Inactive</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-success"><i class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                <a href="#" class="btn btn-success">Active</a>
                            </td>
                          
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    
</div>

@endsection