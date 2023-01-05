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
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td style="width:35%">Sari Ater Corp</td>
                            <td style="width:25%">Balance</td>
                            <td>
                                <a href="#" class="btn btn-primary">Lihat Pengunjung</a>
                                <a href="#" class="btn btn-warning"><i class="bi bi-clock-history"></i>History</a>
                                <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Bayar</a>
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
            <h5 class="modal-title" id="exampleModalCenterTitle">Upload Bukti Pembayaran
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="modal-body">
          <form enctype="multipart/form-data" action="">
            @csrf
            <div class="form-group">
                <label for="foto" class="form-label">Upload Foto</label>
                    <div class="card">
                        <div style="border:1px solid grey;border-style:dashed;" class="card-body">
                            <center>
                                <i class="bi bi-cloud-upload bi-5x" style="font-size:48px"></i>
                            </center>
                            <!-- File uploader with multiple files upload -->
                            <input type="file" name="#" >
                        </div>
                    </div>  
            </div> 
            <div class="mt-4" id="tombol_create">
                <center>
                    <input style="background-color: #FF0000;width:200px;" class="btn btn-danger"  type="submit" value="Bayar">
                </center>
               
            </div>
          </form>
        </div>
    </div>
</div>
</div>
@endsection