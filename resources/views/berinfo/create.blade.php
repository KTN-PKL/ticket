@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="{{route('berinfo')}}" ><i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
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
                    <form enctype="multipart/form-data" method="POST" action="{{route('berinfo.store')}}" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="name" class="form-label">Jenis</label>
                                    <select type="text" id="jenis" class="form-select" placeholder="Masukkan Jenis" name="jenis" data-parsley-required="true">
                                      <option value="" selected disabled>-- Pilih Jenis --</option>
                                      <option value="Berita">Berita</option>
                                      <option value="Informasi">Informasi</option>
                                    </select>
                                </div>
                                <div class="form-group mandatory">
                                    <label for="judsul" class="form-label">Judul</label>
                                    <input type="text" id="judsul" class="form-control" placeholder="Masukkan Judul" name="judul" data-parsley-required="true">
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
                                                <input type="file" name="gambar" data-parsley-required="true" >
                                            </div>
                                        </div>  
                                </div>  
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mandatory">
                                    <label for="isi" class="form-label">Isi</label>
                                <textarea id="editor1" name="isi"></textarea>
                                <script>
                                  CKEDITOR.replace( 'editor1' );
                                </script>
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
