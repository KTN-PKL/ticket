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
                <div class="card-header">
                    <center>
                    <h5>Create Berita & Informasi</h5>
                    </center>
                </div>
                <div class="card-body">
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
                                <textarea type="text" id="lokasi" class="form-control" placeholder="Masukkan Isi" name="lokasi" data-parsley-required="true"></textarea>
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


<script>
    function plus(id)
    {
      var x = id + 1;
      document.getElementById("T" + id).style.display="none";
      document.getElementById("M" + id).style.display="none";
      var y = x % 100;
      var v = id % 100;
      var z = (id-v) / 100;
      var w = z - 1;
      $("#jftr" + w).val(y)
      $("#plus" + id).html(`
      <div class="input-group col-md-12">
      <input type="text" class="form-control" name="fitur`+w+`-`+v+`" placeholder="Skill ...">
      <span class="input-group-text" id="T`+x+`" type = "button" onclick="plus(`+x+`)"><i class="bi bi-plus"></i></span>
      <span class="input-group-text" id="M`+x+`" type = "button" onclick="mins(`+x+`)"><i class="bi bi-x"></i></span>
      </div>
      <div id="plus`+x+`"></div>
      `);
    }
    function mins(id)
    {
      var x = id - 1;
      var y = x % 100;
      var v = id % 100;
      var z = (id-v) / 100;
      var w = z - 1;
      $("#jftr" + w).val(y)
      document.getElementById("T" + x).style.display="block";
      document.getElementById("M" + x).style.display="block";
      
      $("#plus"+ x).html(`  `);
    }
    function plusf(id)
    {
      var x = id + 1;
      document.getElementById("Tf" + id).style.display="none";
      document.getElementById("Mf" + id).style.display="none";
      $("#jf").val(x)
      $("#plusf" + id).html(`
      <div class="input-group col-md-12"> 
      <select type="text" id="kategori" class="form-select" placeholder="Masukkan Kategori Wisata" name="`+id+`id_fasilitas" data-parsley-required="true">
      <option selected>--Pilih Fasilitas--</option>
      @foreach ($fasilitas as $fasilitass)
      <option value="{{ $fasilitass->id_fasilitas }}">{{ $fasilitass->fasilitas }}</option>
      @endforeach
      </select> 
      <span class="input-group-text" id="Tf`+x+`" type = "button" onclick="plusf(`+x+`)"><i class="bi bi-plus"></i></span>   
      <span class="input-group-text" id="Mf`+x+`" type = "button" onclick="minsf(`+x+`)"><i class="bi bi-x"></i></span>
      </div>
      <div id="plusf`+x+`"></div>
      `);
    }
    function minsf(id)
    {
      var x = id - 1;
      document.getElementById("Tf" + x).style.display="block";
      document.getElementById("Mf" + x).style.display="block";
      $("#jf").val(x)
      $("#plusf"+ x).html(`  `);
    }
    function tambahpaket(id)
    {
      var x = id + 1;
      document.getElementById("tp" + id).style.display="none";
      document.getElementById("mp" + id).style.display="none";
      $("#jp").val(x)
      $("#paket" + id).html(`
      <div class="form-group">
      <label for="paket" class="form-label">Paket Wisata</label>
      <input type="text" id="paket" class="form-control" placeholder="Masukkan Nama Paket" name="paket`+id+`" data-parsley-required="true">
        <div class="row mt-2">
          <div class="col col-6 col-md-6">
            <label for="weekday" class="form-label">Harga Weekday</label>
            <input type="text" id="weekday" class="form-control" placeholder="Harga Weekday" name="harga_wday`+id+`" data-parsley-required="true">
            </div>
              <div class="col col-6 col-md-6">
              <label for="weekend" class="form-label">Harga Weekend</label>
              <input type="text" id="weekend" class="form-control" placeholder="Harga Weekend" name="harga_wend`+id+`" data-parsley-required="true">
              </div>
            </div>
            <div class="row mt-2">
              <div class="mb-3">
                <label class="form-label">Fitur Paket</label>
                <input type="text" name="jftr`+id+`" value="1" id="jftr`+id+`" hidden>
                  <div class="input-group col-md-12">
                    <input type="text" class="form-control" value="{{ old('fitur`+id+`') }}" name="fitur`+id+`" placeholder="Masukkan Fitur ...">
                    <span class="input-group-text" id="T`+x+`01" type = "button" onclick="plus(`+x+`01)"><i class="bi bi-plus"></i></span>
                  </div>
                  <div id="M`+x+`01"></div>
                  <div id="plus`+x+`01"></div>
                </div>
              </div>
              <div class="row">
              <center>
              
              <div class="col-md-4">
              <a id="tp`+x+`" class="btn btn-success" onclick="tambahpaket(`+x+`)">Tambah Paket</a>
              </div>
              <div class="col-md-4">
              <a id="mp`+x+`" class="btn btn-warning" onclick="minpaket(`+x+`)">Hapus Paket</a>
              </div>
            
              </center>
            </div>
            </div>
      <div id="paket`+x+`"></div>
      `);
    }
    function minpaket(id)
    {
      var x = id - 1;
      document.getElementById("tp" + x).style.display="block";
      document.getElementById("mp" + x).style.display="block";
      $("#jp").val(x)
      $("#paket"+ x).html(`  `);
    }
  </script> 

  

@endsection