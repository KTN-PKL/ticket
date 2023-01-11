<style>
    .lingkaran{
        padding: 15px;      /* jarak dari tepi lingkaran ke icon */
        border:1px solid black;   /* warna lingkaran */
        color: #aaa;        /* warna icon */
        border-radius: 40%; /* agar div menjadi lingkaran */
        width:65px;

    }
    .pembungkus{
        padding: 15px;      /* jarak dari tepi lingkaran ke icon */
        border:3px solid black;   /* warna lingkaran */
        color: #aaa;        /* warna icon */
        border-radius: 100%; /* agar div menjadi lingkaran */
        width:100px;

    }
</style>
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
                        @php
                        $i=0;
                        @endphp
                        @foreach($masif as $masifs)
                        @php
                        $i=$i+1
                        @endphp
                        <tr>
                            <td>{{$i}}</td>
                            <td style="width:20%">{{$masifs->name}}</td>
                            <td style="width:30%">{{$masifs->wisata}}</td>
                            <td>
                                @if($masifs->stat == "request")
                                <span class="badge bg-warning">Request</span>
                                @elseif($masifs->stat == "process")
                                <span class="badge bg-primary">Process</span>
                                @elseif($masifs->stat == "accepted")
                                <span class="badge bg-success">Accepted</span>
                                @else
                                <span class="badge bg-danger">Paid off</span>
                                @endif
                            </td>
                            <td style="width:30%">
                                @if($masifs->stat == "request")
                                <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="bi bi-whatsapp"></i>Hubungi</a>
                                <a href="#" class="btn btn-primary"> <i class="bi bi-pencil-square"></i>Edit</a>
                                <a href="" class="btn btn-success">Terima</a>
                                @elseif($masifs->stat == "process")
                                <a href="#" class="btn btn-success" onclick="invoice({{$masifs->id_masif}})">Buat Invoice</a>
                                <a href="{{route('masif.edit', $masifs->id_masif)}}" class="btn btn-warning"> <i class="bi bi-pencil-square"></i>Edit</a>
                                <a href="" class="btn btn-primary"> <i class="bi bi-eye"></i>Lihat</a>
                                @elseif($masifs->stat == "accepted")
                                <a href="" class="btn btn-primary"> <i class="bi bi-eye"></i>Lihat</a>
                                <a href="" class="btn btn-danger"> <i class="bi bi-trash"></i>Hapus</a>
                                @else
                                <a href="" class="btn btn-primary"> <i class="bi bi-eye"></i>Lihat</a>
                                <a href="" class="btn btn-danger"> <i class="bi bi-trash"></i>Hapus</a>
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


<!-- Vertically Centered modal Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="modal-body">
            <section class="section">
                <div class="col-md-12">
                    <div id="invoice" class="card mt-2" style="margin-left:2em;margin-right:2em;"> 
                        
                       
                    </div> 
                </div>
               
        
            </section>
        </div>
    </div>
</div>
</div>
@endsection

<script>
      function invoice(id)
    {
        $("#exampleModalCenter").modal('show');
        $.get("{{ url('masif/invoice') }}/" + id, {}, function(data, status) {
                
                $("#invoice").html(data);
               
            });
    }
</script>