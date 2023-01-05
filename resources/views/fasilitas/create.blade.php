@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="{{ route('fasilitas') }}"> <i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;border-radius:0%"> 
                <div class="card-header">
                    <center>
                    <h5>Create Fasilitas</h5>
                    </center>
                </div>
                <div class="card-body">
                    <form  method="POST" action="{{ route('fasilitas.store') }}" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="fasilitas" class="form-label">Nama Fasilitas</label>
                                    <input type="text" id="fasilitas" class="form-control" placeholder="Masukkan Nama Fasilitas" name="fasilitas" data-parsley-required="true">
                                </div>
                            </div>
                        </div>
                        <center>
                        <div class="mt-4" id="tombol_create">
                            <input class="btn btn-primary" type="submit" value="Create">
                        </div>
                        </center>
                    </form>        
                </div>
               


            </div> 
        </div>
       

    </section>
    
</div>

@endsection