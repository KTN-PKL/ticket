
@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="{{route('mitra.postingan', $wisata->id_mitra)}}"><i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;"> 
                <div class="card-header">
                   <center>
                    <h3>Detail Postingan</h3>
                    @php
                    $jumlahfoto = count($fotowisata);
                    $jml = $jumlahfoto = 4;
                    @endphp
                    
                    <img class="img-fluid mt-2" width="400px" height="100px" src="{{asset('/fotowisata/'. $fotowisata[0]->fotowisata)}}" alt="">
                   </center>
                   <center>
                    @for ($i = 1; $i < $jml; $i++)
                    <img  class="img-fluid mt-2" width="100px" height="50px" src="{{asset('/fotowisata/'. $fotowisata[$i]->fotowisata)}}" alt="">
                    @endfor
                    @if($jumlahfoto > 4)
                    <a style="position: absolute;right:30%;"  href=""><i class="bi bi-arrow-right-circle-fill"></i></a>
                    @endif
                   </center>
                  
                    {{-- @foreach($fotowisata as $fotowisatas)
                        <img class="img-fluid mt-2" width="100px" height="100px" src="{{asset('/fotowisata/'. $fotowisatas->fotowisata)}}" alt="" style="border-radius: 25%">
                    @endforeach --}}
                  
                </div>
                <br>
                <br>
                <div class="card-body mt-4" style="margin-left:2em;margin-right:2em;">
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
                           

                            <div class="col col-12 col-md-12">
                                <table style="width:65%;height:5px">
                                    <tr>
                                        <td><i class="bi bi-geo-alt-fill"></i></td>
                                    </tr>
                                    <tr>
                                        <td><h6 style="font-size:14px;color:grey">{{$wisata->lokasi}}</h6></td>
                                    </tr>
                                </table>
                            </div>       
                            <div class="col col-12 col-md-12">
                                <table style="width:65%;height:5px">
                                    
                                    <tr>
                                        <td> <i class="bi bi-clock-fill"></i></td>
                                    </tr>
                                    @foreach($jam_buka as $jam)
                                    <tr>
                                        
                                       <td style="width:30%">
                                        @if($jam->hari == 1) 
                                        <h6 style="font-size:14px;color:grey">Senin</h6>
                                        @elseif($jam->hari == 2)
                                        <h6 style="font-size:14px;color:grey">Selasa</h6>
                                        @elseif($jam->hari == 3)
                                        <h6 style="font-size:14px;color:grey">Rabu</h6>
                                        @elseif($jam->hari == 4)
                                        <h6 style="font-size:14px;color:grey">Kamis</h6>
                                        @elseif($jam->hari == 5)
                                        <h6 style="font-size:14px;color:grey">Jumat</h6>
                                        @elseif($jam->hari == 6)
                                        <h6 style="font-size:14px;color:grey">Sabtu</h6>
                                        @elseif($jam->hari == 7)
                                        <h6 style="font-size:14px;color:grey">Minggu</h6>
                                        @endif
                                        </td> 
                                       <td style="width:15%"><h6 style="font-size:14px;color:grey">{{$jam->jam_buka}}</h6></td>
                                       <td style="width:10%"><h6 style="font-size:14px;color:grey">-</h6></td>
                                       <td style="width:15%"><h6 style="font-size:14px;color:grey">{{$jam->jam_tutup}}</h6></td>
                                       @endforeach
                                    </tr>
                                </table>
                               
        
                              
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
                                <div style="border:1px solid black;height:500px;width:0px;"></div>
                            </center>
                            
                        </div>
                        {{-- End Column Tengah --}}

                        {{-- Start Column Kanan --}}
                        <div class="col-md-5">
                            <div>
                                <h6>Fasilitas Umum</h6>
                               
                                <div class="row">
                                    @foreach($fasilitas_wisata as $fasilitas2)
                                    <div class="col col-4 col-md-4">
                                        <center>
                                            <h6 style="color:rgb(19, 164, 255);border: 1px solid rgb(19, 164, 255);">{{$fasilitas2->fasilitas}}</h6>
                                        </center> 
                                    </div>
                                    @endforeach
                                </div>
                               
                               
                            </div>

                            <div>
                                <h6>Lokasi</h6>
                                <h6></h6>
                               
                            </div>

                            <br><br>

                            @foreach($paket as $pakets)
                            <div style="border:1px solid grey;border-radius:5%;margin-top:1em">                                
                                <center>
                                <h6>{{ $pakets->paket}}</h6>
                                </center>
                                    <div style="margin-left:1em;margin-right:1em">
                                        <h6 style="font-size: 12px;">Fitur yang didapatkan</h6>
                                        <div class="row">
                                            @php
                                                $fiturpaket = explode("+" , $pakets->fitur);
                                            @endphp
                                                    @foreach($fiturpaket as $fiturpakets)
                                                        <div class="col-md-6">
                                                            <center>
                                                                <h6 style="color:rgb(0, 247, 25);border: 1px solid rgb(0, 247, 25);border-radius:10%">{{$fiturpakets}}</h6>
                                                            </center>
                                                           
                                                        </div>
                                                    @endforeach
                                        </div>
                                        
                                    </div>
                            </div>
                            @endforeach
                        </div>
                        {{-- End Column Kanan --}}

                    </div>

                </div>
               


            </div> 
        </div>
       

    </section>
    
</div>

@endsection