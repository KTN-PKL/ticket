@extends('layouts.template')
@section('content')

<div class="container">
<h3>Daftar Tiket Masif</h3>
    <br>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama PJ</th>
                            <th>Tempat Wisata</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td style="width:20%">PJ Sari Ater</td>
                            <td style="width:20%">Sari Ater Hotel </td>
                            <td><h6 style="color: yellow">Request</h6></td>
                            <td>
                                <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="bi bi-whatsapp"></i>Hubungi</a>
                                <a href="#" class="btn btn-primary"> <i class="bi bi-pencil-square"></i>Edit</a>
                                <a href="" class="btn btn-success">Terima</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td style="width:20%">PJ Sari Ater</td>
                            <td style="width:20%">Sari Ater Hotel </td>
                            <td><h6 style="color: #2CE0F9">Process</h6></td>
                            <td>
                                <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Buat Invoice</a>
                                <a href="#" class="btn btn-warning"> <i class="bi bi-pencil-square"></i>Edit</a>
                                <a href="" class="btn btn-primary"> <i class="bi bi-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td style="width:20%">PJ Sari Ater</td>
                            <td style="width:20%">Sari Ater Hotel </td>
                            <td><h6 style="color: red">Paid Off</h6></td>
                            <td>
                                <a href="" class="btn btn-primary"> <i class="bi bi-eye"></i></a>
                                <a href="" class="btn btn-danger"> <i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        {{-- @php
                        $i=0;
                        @endphp
                        @foreach($mitra as $mitras)
                        @php
                        $i=$i+1
                        @endphp
                        <tr>
                            <td>{{$i}}</td>
                            <td style="width:75%">{{$mitras->name}}</td>
                            <td>
                                <a href="{{route('mitra.postingan', $mitras->id_mitra)}}" class="btn btn-primary">Lihat Postingan</a>
                            </td>
                        </tr>
                        @endforeach --}}
                       {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    
</div>


<!-- Vertically Centered modal Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Invoice Pembayaran
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="modal-body">
         ssss
        </div>
    </div>
</div>
</div>
@endsection