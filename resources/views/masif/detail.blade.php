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
        margin-top:1em;

    }
</style>
@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="{{ route('masif') }}"><i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;"> 
                <div class="card-body">
                    <center>
                    <h4>Detail Pemesanan Tiket Masif</h4>
                    <div class="pembungkus">
                        <div class="lingkaran">
                            <i  class="bi bi-ticket-detailed-fill" style="font-size:32px;color:#292D32"></i>
                        </div>
                    </div>
                    
                    </center>
                </div>
                <div class="card-body" style="margin-left:1em;margin-right:1em;">
                    <div class="row">
                        <div class="col-md-5 mt-4">  
                            <table>
                                <tr>
                                    <td valign="top" style="width:50%"><h6>Nama PJ</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">{{$masif->name}}</h6></td>
                                </tr>
                                <tr>
                                    <td valign="top"><h6>NIK</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">{{$masif->nik}}</h6></td>
                                </tr>
                                <tr>
                                    <td valign="top"><h6>Whatsapp</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">{{$masif->kontak}}</h6></td>
                                </tr>
                                <tr>
                                    <td valign="top"><h6>Email</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">{{$masif->email}}</h6></td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-2">
                            <center>
                                <div style="border:1px solid black;height:200px;width:0px;"></div>
                            </center>
                        </div>

                        <div  class="col-md-5 mt-4" >  
                            <table>
                                <tr>
                                    <td valign="top" valign="top"><h6>Wisata</h6></td>
                                    <td valign="top" valign="top"><h6>:</h6></td>
                                    <td valign="top" valign="top"><h6 style="color: black">{{$masif->wisata}}</h6></td>
                                </tr>
                                <tr>
                                    <td valign="top"><h6>Jadwal Kunjungan</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">{{$masif->waktu_kunjungan}}</h6></td>
                                </tr>
                                <tr>
                                    <td valign="top" style="width:50%"><h6>Jumlah Pengunjung</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">{{$masif->qty}} <i class="bi bi-people"></i></h6></td>
                                </tr>
                                <tr>
                                    <td valign="top"><h6>Paket</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><span class="badge bg-success" style="font-size: 14px"> {{$masif->paket}}</span></td>
                                </tr>
                                <tr>
                                    <td valign="top"><h6>Harga Satuan</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">{{$masif->harga}}</h6></td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div> 
        </div>
       

    </section>
    
</div>

@endsection