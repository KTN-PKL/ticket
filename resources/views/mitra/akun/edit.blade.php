@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="#" class="btn btn-primary">Kembali</a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;border-radius:0%"> 
                <div class="card-header">
                    <center>
                    <h5>Edit Mitra</h5>
                    </center>
                </div>
                <div class="card-body">
                    <form  method="POST" action="#" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="name" class="form-label">Nama Mitra</label>
                                    <input type="text" id="name" class="form-control" name="name" data-parsley-required="true">
                                </div>
                                <div class="form-group mandatory">
                                    <label for="emailmitra" class="form-label">Email</label>
                                    <input type="text" id="email" class="form-control"  name="email" data-parsley-required="true">
                                </div>
                                <div class="form-group mandatory">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" id="username" class="form-control"  name="username" data-parsley-required="true">
                                </div>
                                <div class="form-group mandatory">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" class="form-control"  name="password" data-parsley-required="true">
                                </div>
                                 <div class="form-group mandatory">
                                    <label for="whatsapp" class="form-label">Whatsapp</label>
                                    <input type="whatsapp" id="whatsapp" class="form-control" name="whatsapp" data-parsley-required="true">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="fotomitra" class="form-label">Upload Foto</label>
                                    <input type="file" id="logomitra" class="form-control" name="fotomitra" data-parsley-required="true">
                                </div>
                                <div class="form-group mandatory">
                                    <label for="deskripsimitra" class="form-label">Deskripsi Mitra</label>
                                    <textarea type="text" id="deskripsi" class="form-control" name="deskripsi" data-parsley-required="true"></textarea>
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