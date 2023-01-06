@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="{{route('berinfo')}}" ><i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;"> 
                <div class="card-body">
                    <center>
                    <h4>{{$berinfo->jenis}}</h4>
                    <img class="img-fluid mt-2" width="200px" height="200px" src="{{asset('gambar/'. $berinfo->gambar)}}" alt="">
                    <br>
                    <br>
                    <h5>{{$berinfo->judul}}</h5>
                    </center>
                    <br>
                    <p class="text-justify">
                        @php
                            echo $berinfo->isi;
                        @endphp
                    </p>
                </div>
    
               


            </div> 
        </div>
       

    </section>
    
</div>

@endsection