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
                        <div  class="col-md-5">  
                            <h4>{{$wisata->wisata}}</h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <h6 style="color:blue;border: 1px solid rgb(19, 164, 255);">{{$wisata->kategori}}</h6>
                                </div>

                            </div>
                            
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
                                <p class="text-justify" style="font-size: 12px">Desc</p>
                            </div>
                           
                        </div>

                    </div>

                </div>
               


            </div> 
        </div>
       

    </section>
    
</div>

@endsection