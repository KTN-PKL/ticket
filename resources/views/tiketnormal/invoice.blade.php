<div class="card-body">
    <center>
    <h4>Invoice Pembayaran</h4>
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
                            <td valign="top" style="width:50%"><h6>Email Pengguna</h6></td>
                            <td valign="top"><h6>:</h6></td>
                            <td valign="top"><h6 style="color: black">{{$pembayaran->email}}</h6></td>
                        </tr>
                        <tr>
                            <td valign="top"><h6>Whatsapp</h6></td>
                            <td valign="top"><h6>:</h6></td>
                            <td valign="top"><h6 style="color: black">{{$pembayaran->kontak}}</h6></td>
                        </tr>
                        <tr>
                            <td valign="top"><h6>Wisata</h6></td>
                            <td valign="top"><h6>:</h6></td>
                            <td valign="top"><h6 style="color: black">{{$pembayaran->wisata}}</h6></td>
                        </tr>
                        <tr>
                            <td valign="top"><h6>Waktu Kunjungan</h6></td>
                            <td valign="top"><h6>:</h6></td>
                            <td valign="top"><h6 style="color: black">{{$pemesanan->waktu_kunjungan}}</h6></td>
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
                            <td valign="top" valign="top"><h6>Jumlah Pengunjung</h6></td>
                            <td valign="top" valign="top"><h6>:</h6></td>
                            <td valign="top" valign="top"><h6 style="color: black">{{$pembayaran->qty}}</h6></td>
                        </tr>
                        <tr>
                            <td valign="top" valign="top"><h6>Data Pengunjung</h6></td>
                            <td valign="top" valign="top"><h6>:</h6></td>
                            <td valign="top" valign="top">
                                @foreach($pengunjung as $data)
                                <h6 style="color: black">
                                {{$data->atas_nama}}</h6>
                                @endforeach
                            </td>
                        </tr>
                       
                    </table>
                </div>
            </div>
            <div class="mt-4" id="tombol_bayar">
                <center>
                    <a href="#"  style="background-color: #2CF940;width:200px;" class="btn btn-success" id="pay-button">Buat Invoice</a>
                </center>
               
            </div>
        </div>