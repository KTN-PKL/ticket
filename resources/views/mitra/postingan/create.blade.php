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
                    <h5>Create Postingan</h5>
                    </center>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="" class="form" data-parsley-validate>
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
                                      <option selected>--Pilih Kategori--</option>
                                      @foreach ($kategori as $kategoris)
                                      <option value="{{ $kategoris->id_kategori }}">{{ $kategoris->kategori }}</option>
                                      @endforeach
                                    </select>    
                                </div>
                                <div class="form-group mandatory">
                                  <label for="kategori" class="form-label">Fasilitas</label>
                                  <input type="text" hidden value="1" name="jf">
                                  <select type="text" id="kategori" class="form-select" placeholder="Masukkan Kategori Wisata" name="0id_fasilitas" data-parsley-required="true">
                                    <option selected>--Pilih Fasilitas--</option>
                                    @foreach ($fasilitas as $fasilitass)
                                    <option value="{{ $fasilitass->id_fasilitas }}">{{ $fasilitass->fasilitas }}</option>
                                    @endforeach
                                  </select>    
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
                                          <input type="time" class="form-control" name="0jam_buka"/>
                                          <input type="time" class="form-control" name="0jam_tutup"/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="selasa"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Selasa</span>
                                          </div>
                                          <input type="time" class="form-control" name="1jam_buka"/>
                                          <input type="time" class="form-control" name="1jam_tutup"/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="rabu"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Rabu</span>
                                          </div>
                                          <input type="time" class="form-control" name="2jam_buka"/>
                                          <input type="time" class="form-control" name="2jam_tutup"/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="kamis"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Kamis</span>
                                          </div>
                                          <input type="time" class="form-control" name="3jam_buka"/>
                                          <input type="time" class="form-control" name="3jam_tutup"/>
                                        </div>
                                        <div class="input-group mt-2 ">
                                            <label style="font-size:8px" for="Jumat"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Jumat</span>
                                          </div>
                                          <input type="time" class="form-control" name="4jam_buka"/>
                                          <input type="time" class="form-control" name="4jam_tutup"/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="Sabtu"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Sabtu</span>
                                          </div>
                                          <input type="time" class="form-control" name="5jam_buka"/>
                                          <input type="time" class="form-control" name="5jam_tutup"/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="Minggu"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Minggu</span>
                                          </div>
                                          <input type="time" class="form-control" name="6jam_buka"/>
                                          <input type="time" class="form-control" name="6jam_tutup"/>
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
                                {{-- <div class="form-group mandatory">
                                    <label for="lokasi" class="form-label">Link Lokasi</label>
                                    <input type="text" id="lokasi" class="form-control" placeholder="Masukkan link lokasi" name="lokasi" data-parsley-required="true">
                                </div> --}}
                                
                                <div class="form-group mandatory">
                                    <label for="foto" class="form-label">Upload Foto</label>
                                        <div class="card">
                                            <div style="border:1px solid grey;border-style:dashed;" class="card-body">
                                                <center>
                                                    <i class="bi bi-cloud-upload bi-5x" style="font-size:48px"></i>
                                                </center>
                                                <!-- File uploader with multiple files upload -->
                                                <input type="file" class="multiple-files-filepond" name="fotowisata[]" multiple >
                                            </div>
                                        </div>  
                                </div>  
                                <div class="form-group">
                                  <input type="text" name="jp" hidden value="1">
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
                                    <div class="row mt-2">
                                        {{-- <div class="col col-md-12 col-12">
                                            <label for="Fitur" class="form-label">Fitur Paket</label>
                                            <input type="text" name="jumlah" value="1" id="jumlah" hidden>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Masukkan Nama Fitur">
                                                <button class="btn btn-outline-secondary" type="button"id="button-addon2"><i class="bi bi-plus-lg"></i></button>
                                            </div>
                                        </div> --}}
                                        <div class="mb-3">
                                            <label class="form-label">Fitur Paket</label>
                                            <input type="text" name="jftr" value="1" id="jftr" hidden>
                                            <div class="input-group col-md-12">
                                            <input type="text" class="form-control  @error('fitur') is-invalid @enderror" value="{{ old('fitur') }}" name="fitur0" placeholder="Masukkan Fitur ...">
                                            <span class="input-group-text" id="T1" type = "button" onclick="plus(1)"><i class="bi bi-plus"></i></span>
                                            </div>
                                            <div id="M1"></div>
                                            <div id="plus1"></div>
                                             @error('fitur')
                                                  <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                  </span>
                                             @enderror
                                        </div>

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


<script>
    function plus(id)
    {
      var x = id + 1;
      document.getElementById("T" + id).style.display="none";
      document.getElementById("M" + id).style.display="none";
      $("#jftr").val(x)
      $("#plus" + id).html(`
      <div class="input-group col-md-12">
      <input type="text" class="form-control" name="fitur`+id+`" placeholder="Skill ...">
      <span class="input-group-text" id="T`+x+`" type = "button" onclick="plus(`+x+`)"><i class="bi bi-plus"></i></span>
      <span class="input-group-text" id="M`+x+`" type = "button" onclick="mins(`+x+`)"><i class="bi bi-x"></i></span>
      </div>
      <div id="plus`+x+`"></div>
      `);
    }
    function mins(id)
    {
      var x = id - 1;
      document.getElementById("T" + x).style.display="block";
      document.getElementById("M" + x).style.display="block";
      $("#jftr").val(x)
      $("#plus"+ x).html(`  `);
    }
  </script> 

  

@endsection