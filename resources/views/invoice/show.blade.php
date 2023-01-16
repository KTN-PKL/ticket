<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- <title>Order #{{ $order->number }}</title> --}}


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        html {
            font-size: 14px;
        }

        @media (min-width: 768px) {
            html {
                font-size: 16px;
            }
        }

        .container {
            max-width: 1000px;
        }



        .pricing-header {
            max-width: 700px;
        }

        .card-deck .card {
            min-width: 220px;
        }

        .border-top {
            border-top: 1px solid #e5e5e5;
        }

        .border-bottom {
            border-bottom: 1px solid #e5e5e5;
        }

        .box-shadow {
            box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
        }
        .judul{
            font-size: 28px !important;
            margin-bottom:2em
        }
     
        .lingkaran{
        padding: 15px;      /* jarak dari tepi lingkaran ke icon */
        border:1px solid black;   /* warna lingkaran */
        color: #aaa;        /* warna icon */
        border-radius: 40%; /* agar div menjadi lingkaran */
        width:80px;

    }
    .pembungkus{
        padding: 15px;      /* jarak dari tepi lingkaran ke icon */
        border:3px solid black;   /* warna lingkaran */
        color: #aaa;        /* warna icon */
        border-radius: 100%; /* agar div menjadi lingkaran */
        width:120px;
        margin-top:1em;

    }
    .title{
        color: rgb(149, 149, 149)
    }
    .titleharga{
        color: rgb(149, 149, 149);
        font-size: 18px;
    }
    .harga{
        font-size:32px;
        color:  rgb(0, 174, 255);
        padding-right: 1em;
    }
    .header{
        color: rgb(0, 174, 255);
        font-size:24px;
    }
    .isi{
        color:black;
        font-size:18px;
    }



    </style>
</head>

<body>
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <img src="{{asset('template')}}/dist/assets/images/logo/logoulinyuk.png" alt="" width="250px">
            </div>
            <div class="col-md-4">
                <h6 class="judul" style="margin-top:1em">Invoice Pembayaran</h6>
            </div>
        </div>  
        
     <div class="detail">
        <center>
            <h6 class="judul">Detail Pemesanan Tiket</h6>
        </center>
        <br>

            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <table>
                                <tr>
                                    <td valign="top" style="width:50%"><h6 class="title">Email Penerima</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">{{$pembayaran->email}}</h6></td>
                                </tr>
                                <tr>
                                    <td valign="top"><h6 class="title">Kontak</h6></td>
                                    <td valign="top"><h6>:</h6></td>
                                    <td valign="top"><h6 style="color: black">{{$pembayaran->kontak}}</h6></td>
                                </tr>
                            </table>
                        </div>
                          <div class="col-md-6">
                        <table>
                            <tr>
                                <td valign="top"><h6 class="title">Wisata</h6></td>
                                <td valign="top"><h6>:</h6></td>
                                <td valign="top"><h6 style="color: black">{{$pembayaran->wisata}}</h6></td>
                            </tr>
                            <tr>
                                <td valign="top"><h6 class="title">Waktu Kunjungan</h6></td>
                                <td valign="top"><h6>:</h6></td>
                                <td valign="top"><h6 style="color: black">{{$pesan_masif->waktu_kunjungan}}</h6></td>
                            </tr>
                            <tr>
                                <td valign="top"><h6 class="title">Jumlah Pengunjung</h6></td>
                                <td valign="top"><h6>:</h6></td>
                                <td valign="top"><h6 style="color: black">{{$pembayaran->qty}} Orang</h6></td>
                            </tr>
                        </table>

                    </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6 style="padding-right:1em;" class="titleharga">Total Pembayaran</h6> 
                    <h5 class="harga">IDR {{$pembayaran->total_harga}}</h5>
                </div>  

            </div>
            <div class="pemisah" style="border-bottom:2px solid rgb(0, 174, 255);">
            </div>
            <br>
           
        @if($pembayaran->jenis == "personal")
        <table>
            <tr>
                <th><h6 class="header">No</h6></th>
                <th><h6 class="header">Nama Pengunjung</h6></th> 
            </tr>
            <tr>
                @php 
                $i=1;
                @endphp
                @foreach($pengunjung as $data)
                @php
                $i=$i+1;
                @endphp
                <td style="width:10%"><h6 class="isi">{{$i}}</h6></td>
                <td style="width:90%"><h6 class="isi">{{$data->atas_nama}}</h6></td>
                @endforeach
            </tr>
        </table>
        <div class="pemisah" style="border-bottom:2px solid rgb(0, 174, 255);">
        </div>
       @endif

       <div class="detailPemesanan">
       
        <table style="width:100%">
            <tr>
                <th><h6 class="header">No</h6></th>
                <th><h6 class="header">Nama Paket</h6></th> 
                <th><h6 class="header">Fitur Paket</h6></th>
                <th><h6 class="header">Qty</h6></th>
                <th><h6 class="header">Harga Satuan </h6></th>
            </tr>
            <tr>
                <td valign="top" style="width:10%"><h6 class="isi">1</h6></td>
                <td valign="top" style="width:25%"><h6 class="isi">{{$pembayaran->paket}}</h6></td>
                <td valign="top" style="width:25%">
                @php
                    $fiturpaket = explode("+" , $pembayaran->fitur);
                @endphp
                @foreach($fiturpaket as $fitur)
                <h6 class="isi">- {{$fitur}}</h6>
                @endforeach
                </td>
                <td valign="top" style="width:10%"><h6 class="isi">{{$pembayaran->qty}}</h6></td>
                <td valign="top" style="width:30%">
                    <h6 class="isi">
                        @if($pembayaran->jenis == "masif")
                        @ {{$pesan_masif->harga}}
                    @elseif($pembayaran->jenis == "personal")
                        @ {{$pembayaran->harga}}
                    @endif
                    </h6>
                </td>
            </tr>

        </table>

       </div>
     


    </div>   
    </div>






    <div class="card-body">
        {{-- @if ($order->payment_status == 1) --}}
        <center>
            <button style="width:100%" class="btn btn-primary" id="pay-button">Bayar Sekarang</button>
        </center>
           
        {{-- @else
            Pembayaran berhasil
        @endif --}}
    </div>
</div>
   
    

    
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>
    <script>
        const payButton = document.querySelector('#pay-button');
        payButton.addEventListener('click', function(e) {
            e.preventDefault();

            snap.pay('{{ $pembayaran->snap_token }}', {
                // Optional
                onSuccess: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                }
            });
        });
    </script>
        <script src="{{asset('template')}}/dist/assets/js/bootstrap.js"></script>
        <script src="{{asset('template')}}/dist/assets/js/app.js"></script>

</body>

</html>
