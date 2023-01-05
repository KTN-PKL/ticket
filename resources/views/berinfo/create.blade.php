@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="#"><i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;border-radius:0%"> 
                <div class="card-body">
                    <center>
                    <h5>Create Berita & Informasi</h5>
                    </center>
                    <br>
                    <form enctype="multipart/form-data" method="POST" action="#" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="name" class="form-label">Jenis</label>
                                    <select type="text" id="wisata" class="form-select" placeholder="Masukkan Nama Wisata" name="wisata" data-parsley-required="true">
                                      <option value="" selected disabled>-- Pilih Jenis --</option>
                                      <option value="berita">Berita</option>
                                      <option value="informasi">Informasi</option>
                                    </select>
                                </div>
                                <div class="form-group mandatory">
                                    <label for="alamat" class="form-label">Judul</label>
                                    <input type="text" id="lokasi" class="form-control" placeholder="Masukkan Judul" name="lokasi" data-parsley-required="true">
                                </div>      
                            </div>

                            <div class="col-md-6 col-12">   
                                <div class="form-group mandatory">
                                    <label for="foto" class="form-label">Upload Thumbnail</label>
                                        <div class="card">
                                            <div style="border:1px solid grey;border-style:dashed;" class="card-body">
                                                <center>
                                                    <i class="bi bi-cloud-upload bi-5x" style="font-size:48px"></i>
                                                </center>
                                                <!-- File uploader with multiple files upload -->
                                                <input type="file" name="" >
                                            </div>
                                        </div>  
                                </div>  
                            </div>

                            <div class="col-md-12">
                              <div class="form-group mandatory">
                                <label for="alamat" class="form-label">Isi</label>
                                <textarea id="my-editor" type="text" id="lokasi" class="my-editor form-control" placeholder="Masukkan Isi" name="lokasi" data-parsley-required="true"></textarea>
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

@push('scripts')
<script src="https:://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('my-editor');
    </script>
@endpush
