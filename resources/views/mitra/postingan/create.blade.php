@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="{{ route('mitra.akun') }}" class="btn btn-primary">Kembali</a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;border-radius:0%"> 
                <div class="card-header">
                    <center>
                    <h5>Create Postingan</h5>
                    </center>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('mitra.akun.store') }}" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="name" class="form-label">Nama Wisata</label>
                                    <input type="text" id="wisata" class="form-control" placeholder="Masukkan Nama Wisata" name="wisata" data-parsley-required="true">
                                </div>
                                <div class="form-group mandatory">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <select type="text" id="email" class="form-control" placeholder="Masukkan Kategori Wisata" name="kategori" data-parsley-required="true">
                                        <option value="1">1</option>
                                    </select>    
                                </div>
                                <div class="form-group mandatory">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" id="alamat" class="form-control" placeholder="Masukkan alamat Wisata" name="alamat" data-parsley-required="true">
                                </div>
                                <div class="row">
                                    <label for="jam" class="form-label">Jam Operasional</label>
                                    <div class="col-6">
                                      <fieldset>
                                        <div class="input-group">
                                            <label style="font-size:8px" for="senin"></label>
                                          <div class="input-group-prepend">
                                            <span class="input-group-text">Senin</span>
                                          </div>
                                          <input type="time" class="form-control" name=""/>
                                          <input type="time" class="form-control" name=""/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="selasa"></label>
                                          <div class="input-group-prepend">
                                            <span class="input-group-text">Selasa</span>
                                          </div>
                                          <input type="time" class="form-control" name=""/>
                                          <input type="time" class="form-control" name=""/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="rabu"></label>
                                          <div class="input-group-prepend">
                                            <span class="input-group-text">Rabu</span>
                                          </div>
                                          <input type="time" class="form-control" name=""/>
                                          <input type="time" class="form-control" name=""/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="kamis"></label>
                                          <div class="input-group-prepend">
                                            <span class="input-group-text">Kamis</span>
                                          </div>
                                          <input type="time" class="form-control" name=""/>
                                          <input type="time" class="form-control" name=""/>
                                        </div>
                                      </fieldset>  
                                      
                                    </div>
                                    <div class="col-6">
                                      <fieldset>
                                        <div class="input-group ">
                                            <label style="font-size:8px" for="Jumat"></label>
                                          <div class="input-group-prepend">
                                            <span class="input-group-text">Jumat</span>
                                          </div>
                                          <input type="time" class="form-control" name=""/>
                                          <input type="time" class="form-control" name=""/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="Sabtu"></label>
                                          <div class="input-group-prepend">
                                            <span class="input-group-text">Sabtu</span>
                                          </div>
                                          <input type="time" class="form-control" name=""/>
                                          <input type="time" class="form-control" name=""/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="Minggu"></label>
                                          <div class="input-group-prepend">
                                            <span class="input-group-text">Minggu</span>
                                          </div>
                                          <input type="time" class="form-control" name=""/>
                                          <input type="time" class="form-control" name=""/>
                                        </div>
                                        
                                      </fieldset>  
                                    </div>
                                    
                                </div>       
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="card">
                                        <h5 class="card-header">Upload Foto</h5>
                                        <div style="border:1px solid grey" class="card-body">
                                            <center>
                                                <i class="bi bi-cloud-upload bi-5x" style="font-size:48px"></i>
                                            </center>
                                            <!-- File uploader with multiple files upload -->
                                            <input type="file" class="multiple-files-filepond" multiple>
                                        </div>
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