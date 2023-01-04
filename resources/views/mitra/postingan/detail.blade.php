
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
                    <h3>Detail Postingan</h3>
                    @foreach($fotowisata as $fotowisatas)
                <img class="img-fluid mt-2" width="100px" height="100px" src="{{asset('/fotowisata/'. $fotowisatas->fotowisata)}}" alt="" style="border-radius: 25%">
                    @endforeach
                   </center>
                </div>
                <div class="card-body mt-2" style="margin-left:3em;margin-right:3em;">
                    <div class="row">
                        {{-- Start Column Kiri --}}
                        <div  class="col-md-5">  
                            <h4>{{$wisata->wisata}}</h4>

                            <div class="row">
                                <div class="col-md-5">
                                    <center>
                                        <h6 style="color:rgb(19, 164, 255);border: 1px solid rgb(19, 164, 255);">{{$wisata->kategori}}</h6>
                                    </center> 
                                </div>
                                <div class="col-md-5">
                                    <center>
                                       Tempat Rating
                                    </center> 
                                </div>
                            </div>

                        <div class="row">
                            <div class="col col-md-1 col-1">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="col col-10 col-md-10">
                                <h6 style="font-size: 12px;color:grey">{{$wisata->lokasi}}</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-md-1 col-1">
                                <i class="bi bi-clock-fill"></i>
                            </div>
                            <div class="col col-10 col-md-10">
                                @foreach($jam_buka as $jam)
                                <table style="width:65%;height:5px">
                                    <tr>
                                       <td style="width:30%">
                                        @if($jam->hari == 1) 
                                        <h6 style="font-size:12px;color:grey">Senin</h6>
                                        @elseif($jam->hari == 2)
                                        <h6 style="font-size:12px;color:grey">Selasa</h6>
                                        @elseif($jam->hari == 3)
                                        <h6 style="font-size:12px;color:grey">Rabu</h6>
                                        @elseif($jam->hari == 4)
                                        <h6 style="font-size:12px;color:grey">Kamis</h6>
                                        @elseif($jam->hari == 5)
                                        <h6 style="font-size:12px;color:grey">Jumat</h6>
                                        @elseif($jam->hari == 6)
                                        <h6 style="font-size:12px;color:grey">Sabtu</h6>
                                        @elseif($jam->hari == 7)
                                        <h6 style="font-size:12px;color:grey">Minggu</h6>
                                        @endif
                                        </td> 
                                       <td style="width:15%"><h6 style="font-size:12px;color:grey">{{$jam->jam_buka}}</h6></td>
                                       <td style="width:10%"><h6 style="font-size:12px;color:grey">-</h6></td>
                                       <td style="width:15%"><h6 style="font-size:12px;color:grey">{{$jam->jam_tutup}}</h6></td>
                                    </tr>
                                </table>
                               
        
                                @endforeach
                            </div>
                        </div>
                        <br>

                        <div class="col col-12 col-md-12">
                            <h5>Deskripsi</h5>
                            <p style="font-size: 12px">{{$wisata->deskripsi}}</p>
                        </div>
                        
                        </div>
                        {{-- End Column Kiri --}}

                        {{-- Start Column Tengah --}}
                        <div class="col-md-2">
                            <center>
                                <div style="border:1px solid black;height:250px;width:0px;"></div>
                            </center>
                            
                        </div>
                        {{-- End Column Tengah --}}

                        {{-- Start Column Kanan --}}
                        <div class="col-md-5">
                            <div>
                                <h6>Fasilitas Umum</h6>
                                @foreach($fasilitas_wisata as $fasilitas2)
                                <div class="row">
                                    <div class="col col-4 col-md-4">
                                        <center>
                                            <h6 style="color:rgb(19, 164, 255);border: 1px solid rgb(19, 164, 255);">{{$fasilitas2->fasilitas}}</h6>
                                        </center> 
                                    </div>
                                </div>
                               
                                @endforeach
                            </div>

                            <div>
                                <h6>Lokasi</h6>
                                <h6>LINKKKKK</h6>
                               
                            </div>

                            <br><br>
                            <div style="border:1px solid grey;border-radius:10%">
                              
                                    <div>
                                        @foreach($paket as $pakets)
                                        <center>
                                        <h6>{{ $pakets->paket}}</h6>
                                        </center>
                                        <div style="margin-left:1em">
                                            <h6 style="font-size: 12px;">Fitur yang didapatkan</h6>
                                            <div class="col col-4 col-md-4">
                                                <center>
                                                    <h6 style="color:rgb(19, 164, 255);border: 1px solid rgb(19, 164, 255);">{{$fasilitas2->fasilitas}}</h6>
                                                </center> 
                                            </div>
                                        </div>
                                       
                                        @endforeach
                                     
                                    </div>
                                
                                
                                
                             
                            </div>
                           
                        </div>
                        {{-- End Column Kanan --}}

                    </div>

                </div>
               


            </div> 
        </div>
       

    </section>
    
</div>

@endsection