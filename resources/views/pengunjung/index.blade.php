@extends('layouts.template')
@section('content')

<div class="container">
<h3>Daftar Pengunjung Mitra</h3>
    <br>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mitra</th>
                            <th>Balance</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @php $i = 0; @endphp
                    <tbody>
                        @foreach ($mitra as $mitras)
                        <tr>
                            <td>@php
                                $i = $i+1;
                                echo $i;
                            @endphp</td>
                            <td style="width:35%">{{ $mitras->name }}</td>
                            <td style="width:25%">{{ $mitras->balance }}</td>
                            <td>
                                <a href="{{ route('pengunjung.pengunjung', $mitras->id_mitra) }}" class="btn btn-primary">Lihat Pengunjung</a>
                                <a href="{{ route('pengunjung.histori', $mitras->id_mitra) }}" class="btn btn-warning"><i class="bi bi-clock-history"></i>History</a>
                                <a href="#" class="btn btn-success" onclick="bayar({{ $mitras->id_mitra }})">Bayar</a>
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
<div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Upload Bukti Pembayaran
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="modal-body">
         <div id="form">
            
         </div>
            
        </div>
    </div>
</div>
</div>

@endsection
<script>
    function bayar(id)
    {
        var isi = "{{ url('pengunjung/bayar') }}/" + id
        $("#exampleModalCenter").modal('show');
        $("#form").html(`<form enctype="multipart/form-data" method="POST" action="`+isi+`">
            @csrf
            <div class="form-group">
                <label for="foto" class="form-label">Upload Foto</label>
                    <div class="card">
                        <div style="border:1px solid grey;border-style:dashed;" class="card-body">
                            <center>
                                <i class="bi bi-cloud-upload bi-5x" style="font-size:48px"></i>
                            </center>
                            <!-- File uploader with multiple files upload -->
                            <input type="file" name="bukti" >
                        </div>
                    </div>  
            </div> 
            <div class="mt-4" id="tombol_create">
                <center>
                    <button style="background-color: #FF0000;width:200px;" class="btn btn-danger">Bayar</button>
                </center>
               
            </div>
          </form>`)
    }
</script>