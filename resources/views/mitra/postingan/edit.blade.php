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
                    <h5>Edit Postingan</h5>
                    </center>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('mitra.postingan.update', $wisata->id_wisata) }}" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="name" class="form-label">Nama Wisata</label>
                                    <input type="text" id="wisata" class="form-control" placeholder="Masukkan Nama Wisata" name="wisata" data-parsley-required="true" value="{{$wisata->wisata}}">
                                </div>
                                <div class="form-group mandatory">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <select type="text" id="kategori" class="form-select" placeholder="Masukkan Kategori Wisata" name="id_kategori" data-parsley-required="true">
                                      @foreach ($kategori as $kategoris)
                                      <option value="{{ $kategoris->id_kategori }}" @if($kategoris->id_kategori == $wisata->id_kategori ) selected @endif>
                                        {{ $kategoris->kategori }}
                                      </option>
                                      @endforeach
                                    </select>    
                                </div>
                                <div class="form-group mandatory">
                                  @php
                                      $jf = count($fasilitas_wisata);
                                  @endphp
                                  <input type="text" hidden value="{{ $jf }}" name="jf" id="jf">
                                  <label for="kategori" class="form-label">Fasilitas</label>
                                  @php
                                    $i = 0;
                                  @endphp
                                  @foreach ($fasilitas_wisata as $item)
                                  @if ($i <> 0)
                                    <div id="plusf{{ $i }}">
                                  @endif
                                  <div class="input-group col-md-12"> 
                                    <select type="text" id="fasilitas" class="form-select" placeholder="Masukkan fasilitas Wisata" name="{{ $i }}id_fasilitas" data-parsley-required="true">
                                      <option selected>--Pilih Fasilitas--</option>
                                      @foreach ($fasilitas as $fasilitass)
                                      <option value="{{ $fasilitass->id_fasilitas }}" @if($fasilitass->id_fasilitas == $item->id_fasilitas ) selected @endif>{{ $fasilitass->fasilitas }}</option>
                                      @endforeach
                                    </select> 
                                    @php
                                    $i = $i+1;
                                    @endphp
                                    <span class="input-group-text" id="Tf{{ $i }}" type = "button" onclick="plusf({{ $i }})" @if ($i <> $jf)
                                      style="display: none"
                                    @endif><i class="bi bi-plus"></i></span>   
                                    @if ($i <> 1)
                                    <span class="input-group-text" id="Mf{{ $i }}" type = "button" onclick="minsf({{ $i }})" @if ($i <> $jf)
                                      style="display: none"
                                    @endif><i class="bi bi-x"></i></span>
                                  </div>
                                    @else
                                  </div> 
                                  <div id="Mf1"></div>   
                                    @endif
                                    @if ($i == $jf)
                                    <div id="plusf{{ $jf }}"></div>
                                    @else
                                      @if ($i <> 1)
                                    </div>  
                                      @endif
                                    @endif
                                  @endforeach
                              </div>
                                <div class="form-group mandatory">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" id="lokasi" class="form-control" placeholder="Masukkan alamat Wisata" name="lokasi" data-parsley-required="true" value="{{ $wisata->lokasi }}">
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
                                          <input value="{{ $jam_buka[0]->jam_buka }}" type="time" class="form-control" name="0jam_buka"/>
                                          <input value="{{ $jam_buka[0]->jam_tutup }}" type="time" class="form-control" name="0jam_tutup"/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="selasa"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Selasa</span>
                                          </div>
                                          <input value="{{ $jam_buka[1]->jam_buka }}" type="time" class="form-control" name="1jam_buka"/>
                                          <input value="{{ $jam_buka[1]->jam_tutup }}" type="time" class="form-control" name="1jam_tutup"/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="rabu"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Rabu</span>
                                          </div>
                                          <input value="{{ $jam_buka[2]->jam_buka }}" type="time" class="form-control" name="2jam_buka"/>
                                          <input value="{{ $jam_buka[2]->jam_tutup }}" type="time" class="form-control" name="2jam_tutup"/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="kamis"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Kamis</span>
                                          </div>
                                          <input value="{{ $jam_buka[3]->jam_buka }}" type="time" class="form-control" name="3jam_buka"/>
                                          <input value="{{ $jam_buka[3]->jam_tutup }}" type="time" class="form-control" name="3jam_tutup"/>
                                        </div>
                                        <div class="input-group mt-2 ">
                                            <label style="font-size:8px" for="Jumat"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Jumat</span>
                                          </div>
                                          <input value="{{ $jam_buka[4]->jam_buka }}" type="time" class="form-control" name="4jam_buka"/>
                                          <input value="{{ $jam_buka[4]->jam_tutup }}" type="time" class="form-control" name="4jam_tutup"/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="Sabtu"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Sabtu</span>
                                          </div>
                                          <input value="{{ $jam_buka[5]->jam_buka }}" type="time" class="form-control" name="5jam_buka"/>
                                          <input value="{{ $jam_buka[5]->jam_tutup }}" type="time" class="form-control" name="5jam_tutup"/>
                                        </div>
                                        <div class="input-group mt-2">
                                            <label style="font-size:8px" for="Minggu"></label>
                                          <div style="width:20%" class="input-group-prepend">
                                            <span class="input-group-text">Minggu</span>
                                          </div>
                                          <input value="{{ $jam_buka[6]->jam_buka }}" type="time" class="form-control" name="6jam_buka"/>
                                          <input value="{{ $jam_buka[6]->jam_tutup }}" type="time" class="form-control" name="6jam_tutup"/>
                                        </div>
                                        <div class="form-group mandatory">
                                          <label for="name" class="form-label">Deskripsi</label>
                                          <input type="text" id="deskripsi" class="form-control" placeholder="Masukkan Deskripsi" name="deskripsi" data-parsley-required="true" value="{{ $wisata->deskripsi }}">
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
                                                <input type="file" multiple name="fotowisata[]" >
                                            </div>
                                        </div>  
                                </div> 

                                @php
                                    $jp = count($paket);
                                    $a = 0;
                                @endphp
                                <input type="text" name="jp" hidden value="{{ $jp }}" id="jp">
                                @foreach ($paket as $pkt)
                                @if ($a <> 0)
                                <div id="paket{{ $a }}">
                                @endif
                                <div class="form-group">
                                  <label for="paket" class="form-label">Paket Wisata</label>
                                    <input type="text" id="paket" class="form-control" placeholder="Masukkan Nama Paket" name="paket{{ $a }}" data-parsley-required="true" value="{{ $pkt->paket }}">
                                    <div class="row mt-2">
                                        <div class="col col-6 col-md-6">
                                            <label for="weekday" class="form-label">Harga Weekday</label>
                                            <input type="text" id="weekday" class="form-control" placeholder="Harga Weekday" name="harga_wday{{ $a }}" data-parsley-required="true"  value="{{ $pkt->harga_wday }}">
                                        </div>
                                        <div class="col col-6 col-md-6">
                                            <label for="weekend" class="form-label">Harga Weekend</label>
                                            <input type="text" id="weekend" class="form-control" placeholder="Harga Weekend" name="harga_wend{{ $a }}" data-parsley-required="true" value="{{ $pkt->harga_wend }}">
                                        </div>
                                    </div>
                                    
                                        <div class="mb-3">
                                            <label class="form-label">Fitur Paket</label>
                                            @php
                                                $fitur = explode("+" , $pkt->fitur);
                                                $jftr = count($fitur);
                                            @endphp
                                            <input type="text" name="jftr{{ $a }}" value="{{ $jftr }}" id="jftr{{ $a }}" hidden>
                                            @php
                                            $a = $a + 1;
                                            $b = 0;
                                           @endphp
                              
                                            @foreach ($fitur as $fiturs)
                                            @if ($b <> 0)
                                            <div id="plus{{ $a }}0{{ $b }}">
                                            @endif
                                            
                                            <div class="input-group col-md-12">
                                            @if ($b == 0)
                                                <input type="text" class="form-control  @error('fitur0') is-invalid @enderror" name="fitur{{ $a }}" value="{{ $fiturs }}">  
                                                @else
                                                  <input type="text" class="form-control" name="fitur{{ $a }}-{{ $b }}" placeholder="Skill ..." value="{{ $fiturs }}">   
                                            @endif
                                            @php
                                                $b = $b +1;
                                            @endphp
                                            <span class="input-group-text" id="T{{ $a }}0{{ $b }}" type = "button" onclick="plus({{ $a }}0{{ $b }})" @if ($b <> $jftr)
                                              style="display: none"
                                            @endif><i class="bi bi-plus"></i></span>
                                            @if ($b <> 1)
                                            <span class="input-group-text" id="M{{ $a }}0{{ $b }}" type = "button" onclick="mins({{ $a }}0{{ $b }})" @if ($b <> $jftr)
                                              style="display: none"
                                            @endif><i class="bi bi-x"></i></span>
                                            </div>
                                            @else
                                            </div>
                                            <div id="M{{ $a }}0{{ $b }}"></div>
                                            @endif
                                            @if ($b == $jftr)
                                            <div id="plus{{ $a }}0{{ $b }}"></div>
                                            @else
                                            @if ($b <> 1)
                                          </div> 
                                            @endif
                                            @endif
                                            @endforeach
                                             @error('fitur')
                                                  <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                  </span>
                                             @enderror
                                    </div>
                                    <center>
                                    <div class="col-md-4">
                                    <a id="tp{{ $a }}" class="btn btn-success" onclick="tambahpaket({{ $a }})" @if ($a <> $jp)
                                      style="display: none"
                                    @endif>Tambah Paket</a>
                                    </div>
                                    @if ($a == 1)
                                    <div id="mp1"></div>
                                    @else
                                    <div class="col-md-4">
                                      <a id="mp{{ $a }}" class="btn btn-warning" onclick="minpaket({{ $a }})" @if ($a <> $jp)
                                        style="display: none"
                                      @endif>Hapus Paket</a>
                                    </div>   
                                    @endif
                                  </center>
                                </div>
                                @if ($a == $jp)
                                <div id="paket{{ $a }}"></div>  
                                @else
                                @if ($a <> 1)
                              </div>
                                @endif
                               
                                @endif  
                                @endforeach

                                
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
    <input type="text" class="form-control" name="fitur`+z+`-`+v+`" placeholder="Skill ...">
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