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
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     <tr>
                        @php
                        $i=0;
                        @endphp
                        @foreach($pesan_tiket as $tiket)
                        @php
                        $i=$i+1;
                        @endphp
                        <td>{{$i}}</td>
                        <td>{{$tiket->email}}</td>
                        <td>{{$tiket->wisata}}</td>
                        <td>
                           
                            @if($tiket->status == "tertunda")
                            <span class="badge bg-success">Process</span>
                            @elseif($tiket->status == "lunas")
                            <span class="badge bg-success">Paid</span>
                            @endif
                        </td>
                        <td>
                            @if($tiket->snap_token == null)
                            <input type="text" hidden id="id{{ $i }}" value="{{ $tiket->id_pembayaran }}">
                            <a href="#" onclick="invoice({{$i}})" class="btn btn-success btn-sm">Buat Invoice</a>
                            <a href="{{route('tiketnormal.edit', $tiket->id_pembayaran)}}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Hapus Tiket</a>
                            @elseif($tiket->snap_token <> null)
                            <a href="{{route('invoice.show', $tiket->id_pembayaran)}}" target="_blank" class="btn btn-primary"> <i class="bi bi-eye"></i>Lihat Invoice</a>
                            <a href="#" class="btn btn-danger"> <i class="bi bi-trash"></i>Hapus Invoice</a>
                            @elseif($tiket->status="lunas")
                            <span class="badge bg-success">Pembayaran Telah Dilakukan</span>
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
                    <div id="form" class="card mt-2" style="margin-left:2em;margin-right:2em;"> 
                        
                       
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
    var idt =  $("#id"+id).val();
    $("#exampleModalCenter").modal('show');
    $.get("{{ url('tiketnormal/invoice') }}/" + idt, {}, function(data, status) {
            
            $("#form").html(data);
           
        });
}

</script>
