<style>
    .tiketatas{
        background-color: #554594;
    }
    .tiketbawah{
        background-color: #FFCB8B;
    }
    .lingkaran1{
        padding: 15px;      
        background-color: white;  
        border-radius: 100%; 
        width:50px;
        height: 50px;
        position: absolute;
        right:0px;
        top: 110px

    }
    .lingkaran2{
        padding: 15px;      
        background-color: white;  
        border-radius: 100%; 
        width:50px;
        height: 50px;
        position: absolute;
        right:0px;
        bottom: 75px;

    }
    .lingkaran3{
        padding: 15px;      
        background-color: white;  
        border-radius: 100%; 
        width:50px;
        height: 50px;
        position: absolute;
        left:0px;
        top: 110px

    }
    .lingkaran4{
        padding: 15px;      
        background-color: white;  
        border-radius: 100%; 
        width:50px;
        height: 50px;
        position: absolute;
        left:0px;
        bottom: 75px;

    }
    .img-fluid{
        display: block;
        margin-left: auto;
        margin-right: 1em;
        width:125px; 
        height:50px;

    }
    .judul{
        color: rgb(191, 191, 191)
    }
    .column{
        margin-left:0,5em;
        color:white;
        border-right:1px solid grey;
    }
    .column1{
        margin-left:4em;
        color:white;
        border-right:1px solid grey;
    }
    .detail{
        margin-left:4em;
    }

    
</style>

@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="#"><i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;"> 
                <div class="card-body">
                    <center>
                    <h4>Detail Pembatalan Tiket</h4>
                    {{-- <h6>Kode Tiket : ET-XXXX-XXXX-XX</h6> --}}
                    </center>
                    <div class="col-md-12">
                        <div style="height:150px" class="tiketatas"> 
                            <div class="sampingan">
                                <div class="lingkaran1">
                                </div>
                                <div class="lingkaran2">
                                </div>
                                <div class="lingkaran3">
                                </div>
                                <div class="lingkaran4">
                                </div>
                            </div>
                            <div class="header">
                             <img class="img-fluid" src="{{('template')}}/dist/assets/images/logo/logoulinyuk.png" alt="Logo" srcset=""></a>
                            </div>
                            <div class="row">
                                <div class="col col-md-3">
                                    <div class="column1">
                                        <h6 class="judul">Jadwal</h6>
                                        <h6>Senin, 30 Feb 2022</h6>
                                    </div>
                                </div>
                                <div class="col col-md-3">
                                    <div class="column">
                                        <h6 class="judul">Atas Nama</h6>
                                        <h6>Aji Santoso</h6>
                                    </div>
                                </div>
                                <div class="col col-md-3">
                                    <div class="column">
                                        <h6 class="judul">Wisata</h6>
                                        <h6 style="color: #FFB75E">Sari Ater Hotels</h6>
                                    </div>
                                </div>
                                <div class="col col-md-3">
                                    <div class="column">
                                        <h6 class="judul">Pengunjung</h6>
                                        <h6>1 Orang</h6>
                                    </div>
                                </div>
                               
                                

                            </div>
                            
                    
                        </div>
                        <div style="height:150px" class="tiketbawah"> 
                            <br>
                            <div class="detail">
                                <table >
                                    <tr>
                                        <td style="vertical-align: top"><h6>Kode Tiket</h6></td>
                                        <td style="vertical-align: top">:</td>
                                        <td style="vertical-align: top"><span class="badge bg-primary">ET-XX-XXXX-XXXX</span></td>
                                    </tr>
                                </table>
                            </div>
                            
                          
                        </div>

                    </div>
                </div>
            </div> 
        </div>
       

    </section>
    
</div>

@endsection