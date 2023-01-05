<style>
    .isi{
        margin-left:1em;
        margin-top:1em;
        margin-bottom:1em;
        margin-right:1em;
    }
    .pesan{
        border: 1px solid rgb(99, 99, 99);
    }
</style>
@extends('layouts.template')
@section('content')
<div class="col mt-2">
   
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;border-radius:0%"> 
               
                <div class="card-body mt-4">
                    <center>
                        <h5>Detail Feedback</h5>
                        </center>
                        <div class="col-md-12 mt-4">
                            <table>
                                <tr>
                                    <td style="width:50%"><h6>Nama Pengirim</h6></td>
                                    <td><h6>:</h6></td>
                                    <td><h6 style="color: black">{{$feedback->name}}</h6></td>
                                </tr>
                                <tr>
                                    <td style="width:50%"><h6>Email Pengirim</h6></td>
                                    <td><h6>:</h6></td>
                                    <td><h6 style="color: black">{{$feedback->email}}</h6></td>
                                </tr>
                            </table>    
                        </div>
                        <div class="col-md-12 mt-4">
                            <h5>Isi Pesan</h5>
                            <div class="pesan">
                                <div class="isi">
                                    <h6>{{$feedback->isi_pesan}}</h6>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 mt-4">
                            <h5>Balas Pesan</h5>
                            <form action="{{route('feedback.balas', $feedback->id_feedback)}}" id="form1">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Masukkan Balasan"
                                       aria-describedby="button-addon2" name="balas_pesan" value="{{$feedback->balas_pesan}}">
                                       <button type="submit" form="form1" class="btn btn-primary" ><i class="bi bi-send"></i></button>
                                </div>
                            </form>
                                 
                               

                        </div>
                        
                    {{-- <form  method="POST" action="{{ route('kategori.update',$kategori->id_kategori) }}" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="kategori" class="form-label">Nama Kategori</label>
                                    <input type="text" id="kategori" class="form-control" placeholder="Masukkan Nama Kategori" name="kategori" data-parsley-required="true" value="{{$kategori->kategori}}">
                                </div>
                            </div>
                        </div>
                        <center>
                        <div class="mt-4" id="tombol_create">
                            <input class="btn btn-primary" type="submit" value="Edit">
                        </div>
                        </center>
                    </form>         --}}
                </div>
               


            </div> 
        </div>
       

    </section>
    
</div>

@endsection