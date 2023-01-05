@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="{{ route('mitra.akun') }}" class="btn btn-primary">Kembali</a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;"> 
                <div class="card-header">
                    <center>
                    <h4>Detail Mitra</h4>
                  
                    <img class="img-rounded mt-2" width="200px" height="200px" src="{{asset('/foto/'.$mitra->foto)}}" alt="" style="border-radius: 50%">
                    </center>
                </div>
                <div class="card-body" style="margin-left:3em;margin-right:3em;">
                    <div class="row">
                        <div  class="col-md-5">  
                            <table>
                                <tr>
                                    <td style="width:50%"><h6>Nama</h6></td>
                                    <td><h6>:</h6></td>
                                    <td><h6 style="color: black">{{$mitra->name}}</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Email</h6></td>
                                    <td><h6>:</h6></td>
                                    <td><h6 style="color: black">{{$mitra->email}}</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Username</h6></td>
                                    <td><h6>:</h6></td>
                                    <td><h6 style="color: black">{{$mitra->username}}</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Whatsapp</h6></td>
                                    <td><h6>:</h6></td>
                                    <td><h6 style="color: black">{{$mitra->kontak}}</h6></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-2">
                            <center>
                                <div style="border:1px solid black;height:250px;width:0px;"></div>
                            </center>
                            
                        </div>
                        <div class="col-md-5">
                            <div>
                                <center>
                                    <h6>Deskripsi</h6>
                                </center>
                                <p class="text-justify" style="font-size: 12px">{{$mitra->deskripsi_mitra}}</p>
                            </div>
                           
                        </div>

                    </div>

                </div>
               


            </div> 
        </div>
       

    </section>
    
</div>

@endsection