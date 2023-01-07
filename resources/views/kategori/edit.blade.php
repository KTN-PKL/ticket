@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="{{ route('datamaster.kategori') }}" class="btn btn-primary">Kembali</a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;border-radius:0%"> 
                <div class="card-header">
                    <center>
                    <h5>Edit Kategori</h5>
                    </center>
                </div>
                <div class="card-body">
                    <form  method="POST" action="{{ route('datamaster.kategori.update',$kategori->id_kategori) }}" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="kategori" class="form-label">Nama Kategori</label>
                                    <input type="text" id="kategori" class="form-control" placeholder="Masukkan Nama Kategori" name="kategori" data-parsley-required="true" value="{{$kategori->kategori}}">
                                </div>
                            </div>
                        </div>
                        <center>
                        <div class="mt-4" id="tombol_create">
                            <input class="btn btn-primary" type="submit" value="Edit">
                        </div>
                        </center>
                    </form>        
                </div>
               


            </div> 
        </div>
       

    </section>
    
</div>

@endsection