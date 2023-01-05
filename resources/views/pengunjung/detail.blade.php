
@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="#" class="btn btn-primary">Kembali</a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;"> 
                <div class="card-header">
                    <center>
                    <h4>Detail Pengunjung</h4>
                    <h6>Kode Tiket : ET-XXXX-XXXX-XX</h6>
                    </center>
                </div>
                <div class="card-body" style="margin-left:1em;margin-right:1em;">
                    <div class="row">
                        <div class="col-md-6 mt-4">  
                            <table>
                                <tr>
                                    <td valign="top" style="width:50%"><h6>Nama Lengkap</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">Aji Santoso</h6></td>
                                </tr>
                                <tr>
                                    <td valign="top"><h6>Whatsapp</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">0822490253533</h6></td>
                                </tr>
                                <tr>
                                    <td valign="top" valign="top"><h6>Tujuan Wisata</h6></td>
                                    <td valign="top" valign="top"><h6>:</h6></td>
                                    <td valign="top" valign="top"><h6 style="color: black">Sari Ater Hotel & Resort</h6></td>
                                </tr>
                                <tr>
                                    <td valign="top"><h6>Jadwal Kunjungan</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">24 Desember 2022</h6></td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-1">
                            
                                <div style="border:1px solid black;height:200px;width:0px;float: left;"></div>
                            
                        </div>

                        <div  class="col-md-5 mt-4" >  
                            <table>
                                <tr>
                                    <td valign="top" style="width:50%"><h6>Jumlah Pengunjung</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">1 <i class="bi bi-people"></i></h6></td>
                                </tr>
                                <tr>
                                    <td valign="top"><h6>Paket</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><span class="badge bg-success" style="font-size: 14px"> Paket A</span></td>
                                </tr>
                                <tr>
                                    <td valign="top"><h6>Harga</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">75000</h6></td>
                                </tr>
                                <tr>
                                    <td valign="top"><h6>Status</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><span class="badge bg-success"><i class="bi bi-patch-check" style="font-size: 14px"></i> Check-in</span></td>
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