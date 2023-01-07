@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="{{route('mitra')}}"><i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
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
                    <form enctype="multipart/form-data" method="POST" action="{{route('mitra.postingan.store', $mitra->id_mitra)}}" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="name" class="form-label">Nama Wisata</label>
                                    <input type="text" id="wisata" class="form-control" placeholder="Masukkan Nama Wisata" name="wisata" data-parsley-required="true">
                                </div>
                                <div class="form-group mandatory">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <select type="text" id="kategori" class="form-select" placeholder="Masukkan Kategori Wisata" name="id_kategori" data-parsley-required="true">
                                      <option value="" selected>--Pilih Kategori--</option>
                                      @foreach ($kategori as $kategoris)
                                      <option value="{{ $kategoris->id_kategori }}">{{ $kategoris->kategori }}</option>
                                      @endforeach
                                    </select>    
                                </div>
                                <div class="form-group mandatory">
                                  <input type="text" hidden value="1" name="jf" id="jf">
                                  <label for="kategori" class="form-label">Fasilitas</label>
                                  <div class="input-group col-md-12"> 
                                  <select type="text" id="kategori" class="form-select" placeholder="Masukkan Kategori Wisata" name="0id_fasilitas" data-parsley-required="true">
                                    <option value="" selected>--Pilih Fasilitas--</option>
                                    @foreach ($fasilitas as $fasilitass)
                                    <option value="{{ $fasilitass->id_fasilitas }}">{{ $fasilitass->fasilitas }}</option>
                                    @endforeach
                                  </select> 
                                  <span class="input-group-text" id="Tf1" type = "button" onclick="plusf(1)"><i class="bi bi-plus"></i></span>   
                                  </div>
                                  <div id="Mf1"></div>
                                  <div id="plusf1"></div>
                              </div>
                                <div class="form-group mandatory">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" id="lokasi" class="form-control" placeholder="Masukkan alamat Wisata" name="lokasi" data-parsley-required="true">
                                </div>
                                <div class="row">
                                    <label for="jam" class="form-label">Jam Operasional</label>
                                    <div class="col col-12 col-md-12">
                                      <fieldset>
                                        <div class="input-group">
                                            <label style="font-size:8px" for="senin"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Senin</span>
                                          </div>
                                          <input type="time" class="form-control" name="0jam_buka" data-parsley-required="true" />
                                          <input type="time" class="form-control" name="0jam_tutup"  data-parsley-required/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="selasa"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Selasa</span>
                                          </div>
                                          <input type="time" class="form-control" name="1jam_buka" data-parsley-required="true"/>
                                          <input type="time" class="form-control" name="1jam_tutup" data-parsley-required="true"/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="rabu"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Rabu</span>
                                          </div>
                                          <input type="time" class="form-control" name="2jam_buka" data-parsley-required="true"/>
                                          <input type="time" class="form-control" name="2jam_tutup" data-parsley-required="true"/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="kamis"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Kamis</span>
                                          </div>
                                          <input type="time" class="form-control" name="3jam_buka" data-parsley-required="true"/>
                                          <input type="time" class="form-control" name="3jam_tutup" data-parsley-required="true"/>
                                        </div>
                                        <div class="input-group mt-2 ">
                                            <label style="font-size:8px" for="Jumat"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Jumat</span>
                                          </div>
                                          <input type="time" class="form-control" name="4jam_buka" data-parsley-required="true"/>
                                          <input type="time" class="form-control" name="4jam_tutup" data-parsley-required="true"/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="Sabtu"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Sabtu</span>
                                          </div>
                                          <input type="time" class="form-control" name="5jam_buka" data-parsley-required="true"/>
                                          <input type="time" class="form-control" name="5jam_tutup" data-parsley-required="true"/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="Minggu"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Minggu</span>
                                          </div>
                                          <input type="time" class="form-control" name="6jam_buka" data-parsley-required="true"/>
                                          <input type="time" class="form-control" name="6jam_tutup" data-parsley-required="true"/>
                                        </div>
                                        <div class="form-group mandatory">
                                          <label for="name" class="form-label">Deskripsi</label>
                                          <input type="text" id="deskripsi" class="form-control" placeholder="Masukkan Deskripsi" name="deskripsi" data-parsley-required="true">
                                      </div>
                                      </fieldset>  
                                      
                                    </div>
                                   
                                </div>       
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="maps" class="form-label">Link maps</label>
                                    <input type="text" id="maps" class="form-control" placeholder="Masukkan link maps" name="maps" data-parsley-required="true">
                                </div>
                                
                                <div class="form-group mandatory">
                                    <label for="foto" class="form-label">Upload Foto</label>
                                        <div class="card">
                                            <div style="border:1px solid grey;border-style:dashed;" class="card-body">
                                                <center>
                                                    <i class="bi bi-cloud-upload bi-5x" style="font-size:48px"></i>
                                                </center>
                                                <!-- File uploader with multiple files upload -->
                                                <input type="file" multiple name="fotowisata[]" >
                                            </div>
                                        </div>  
                                </div> 
                                <input type="text" name="jp" hidden value="1" id="jp">
                                
                                <div class="form-group">
                                  <label for="paket" class="form-label">Paket Wisata</label>
                                    <input type="text" id="paket" class="form-control" placeholder="Masukkan Nama Paket" name="paket0" data-parsley-required="true">
                                    <div class="row mt-2">
                                        <div class="col col-6 col-md-6">
                                            <label for="weekday" class="form-label">Harga Weekday</label>
                                            <input type="text" id="weekday" class="form-control" placeholder="Harga Weekday" name="harga_wday0" data-parsley-required="true">
                                        </div>
                                        <div class="col col-6 col-md-6">
                                            <label for="weekend" class="form-label">Harga Weekend</label>
                                            <input type="text" id="weekend" class="form-control" placeholder="Harga Weekend" name="harga_wend0" data-parsley-required="true">
                                        </div>
                                    </div>
                                    
                                        <div class="mb-3">
                                            <label class="form-label">Fitur Paket</label>
                                            <input type="text" name="jftr0" value="1" id="jftr0" hidden>
                                            <div class="input-group col-md-12">
                                            <input type="text" class="form-control  @error('fitur0') is-invalid @enderror" value="{{ old('fitur0') }}" name="fitur0" placeholder="Masukkan Fitur ...">
                                            <span class="input-group-text" id="T101" type = "button" onclick="plus(101)"><i class="bi bi-plus"></i></span>
                                            </div>
                                            <div id="M101"></div>
                                            <div id="plus101"></div>
                                             @error('fitur')
                                                  <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                  </span>
                                             @enderror
                                      

                                    </div>
                                    <center>
                                    <div id="mp1"></div>
                                    <div class="col-md-4">
                                    <a id="tp1" class="btn btn-success" onclick="tambahpaket(1)">Tambah Paket</a>
                                    </div>
                                  </center>
                                </div>
                                <div id="paket1"></div>
                                

                                
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