<style>
    .isi{
        color: rgb(79, 79, 79)
    }
    .judul{
        margin-top:1em;
    }
    .tombol{
        margin-left:2em;
    }
</style>
@extends('layouts.template')
@section('content')
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;"> 
             
                <div class="card-body mt-4" style="margin-left:3em;margin-right:3em;">
                        <div  class="col-md-12">  
                            <center>
                                @if(session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{session('success')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                                <h4>Profil Admin</h4>
                              
                                <img class="img-rounded" width="100px" height="100px" src="{{asset('/foto/'.$admin->foto)}}" alt="" style="border-radius: 100%">
                               
                            <div class="col-md-12 mt-4">
                                <table>
                                    <tr>
                                        <td style="width:50%"><h6>Nama</h6></td>
                                        <td style="width:5%"><h6>:</h6></td>
                                        <td><h6 style="color: black">{{$admin->name}}</h6></td>
                                    </tr> 
                                    <tr>
                                        <td style="width:50%"><h6>Email</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6 style="color: black">{{$admin->email}}</h6></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%"><h6>Kontak</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6 style="color: black">{{$admin->kontak}}</h6></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%"><h6>Posisi</h6></td>
                                        <td><h6>:</h6></td>
                                        <td><h6 style="color: black">{{$admin->posisi}}</h6></td>
                                    </tr>
                                </table>
                                <br>
                                <div class="tombol">
                                    <a href="{{route('profil.edit')}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit Profil</a>
                                    <a href="{{route('profil.keamanan')}}" class="btn btn-danger"> <i class="bi bi-key"></i> Password & Keamanan</a>    
                                </div>
                              
                                

                            </div>
                            </center>
                        </div>

                           
                           
                      

                    </div>

                </div>
               


            </div> 
        </div>
       

    </section>
    
</div>

@endsection