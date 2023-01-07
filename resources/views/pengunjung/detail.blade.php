<style>
    .badge-refund {
  color: #ebeef0;
  background-color: #F96A2C;
  font-size:16px;
}
   .badge-process {
  color: #ebeef0;
  background-color: #F28F1A;
  font-size:16px;
}
.badge-available {
  color: #ebeef0;
  background-color: #25D977;
  font-size:16px;
}
</style>

@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="{{ route('pengunjung.pengunjung', $pengunjung->id_mitra) }}"><i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;"> 
                <div class="card-header">
                    <center>
                    <h4>Detail Pengunjung</h4>
                    <h6>Kode Tiket : {{ $pengunjung->kode_tiket }}</h6>
                    </center>
                </div>
                <div class="card-body" style="margin-left:1em;margin-right:1em;">
                    <div class="row">
                        <div class="col-md-6 mt-4">  
                            <table>
                                <tr>
                                    <td valign="top" style="width:50%"><h6>Nama Lengkap</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">{{ $pengunjung->atas_nama }}</h6></td>
                                </tr>
                                <tr>
                                    <td valign="top"><h6>Whatsapp</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">{{ $pengunjung->whatsapp }}</h6></td>
                                </tr>
                                <tr>
                                    <td valign="top" valign="top"><h6>Tujuan Wisata</h6></td>
                                    <td valign="top" valign="top"><h6>:</h6></td>
                                    <td valign="top" valign="top"><h6 style="color: black">{{ $pengunjung->wisata }}</h6></td>
                                </tr>
                                <tr>
                                    <td valign="top"><h6>Jadwal Kunjungan</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">{{ $pengunjung->waktu_kunjungan }}</h6></td>
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
                                    <td valign="top"><h6 style="color: black">{{ $pengunjung->qty }} <i class="bi bi-people"></i></h6></td>
                                </tr>
                                <tr>
                                    <td valign="top"><h6>Paket</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><span class="badge bg-success" style="font-size: 14px"> {{ $pengunjung->paket }}</span></td>
                                </tr>
                                <tr>
                                    <td valign="top"><h6>Harga</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">{{ $pengunjung->harga }}</h6></td>
                                </tr>
                                <tr>
                                    <td valign="top"><h6>Status</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top">
                                        @if($pengunjung->status == "checkin")
                                        <span class="badge bg-success"><i class="bi bi-patch-check" style="font-size: 18px"></i> Check-in</span>
                                        @elseif($pengunjung->status == "expired")
                                        <span class="badge bg-danger"><iconify-icon style="font-size: 12px" icon="mdi:clock-remove-outline"></iconify-icon> Expired</span>
                                        @elseif($pengunjung->status == "refund")
                                        <span class="badge badge-refund"><iconify-icon icon="mdi:cash-refund"></iconify-icon> Refund</span>
                                        @elseif($pengunjung->status == "process refund")
                                        <span class="badge badge-process"><iconify-icon icon="mdi:cash-refund"></iconify-icon> Process Refund</span>
                                        @elseif($pengunjung->status == "available")
                                        <span class="badge badge-available"><iconify-icon style="font-size:14px" icon="mdi:clock-check-outline"></iconify-icon> Available</span>
                                        @endif
                                    </td>
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