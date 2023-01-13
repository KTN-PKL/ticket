@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="{{ route('tiketnormal') }}" class="btn btn-primary">Kembali</a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;border-radius:0%"> 
                <div class="card-header">
                    <center>
                    <h5>Create Tiket Normal</h5>
                    </center>
                </div>
                <div class="card-body">
                    <form  method="POST" action="{{route('tiketnormal.store')}}" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">

                                    <label for="name" class="form-label">Email Pengguna</label>
                                    <select name="id_pengguna" id="nameid" class="js-example-responsive" style="width: 100%;">
                                        <option value="">-- Pilih Pengguna --</option>
                                        @foreach($pengguna as $username)
                                        <option value="{{ $username->email }}">{{ $username->email }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Data Pengunjung</label>
                                    <input type="text" name="jumlah" value="1" id="jumlah" hidden>
                                    <div class="input-group col-md-6 mb-3">
                                    <input type="text" class="form-control  @error('atas_nama') is-invalid @enderror" value="{{ old('atas_nama') }}" name="atas_nama0" placeholder="Data Pengunjung 1">
                                    <span class="input-group-text" id="T1" type = "button" onclick="plus(1)"><i class="fa fa-plus"></i></span>
                                    </div>
                                    <div id="M1"></div>
                                    <div id="plus1"></div>
                                     @error('atas_nama')
                                          <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                     @enderror
                                </div>
                              
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mandatory">
                                    <label for="" class="form-label">Tujuan Wisata</label>
                                    <select name="wisata" id="id_wisata" class="js-example-responsive" style="width: 100%;" onchange="readpaket()">
                                        <option value="" disabled selected >-- Pilih Tujuan Wisata</option>
                                        @foreach($wisata as $wisatas)
                                        <option value="{{ $wisatas->id_wisata }}">{{ $wisatas->wisata }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div id="paket" class="form-group mandatory">
                            
                                </div>
                                <div id="harga" class="form-group mandatory">
                            
                                </div>
                                <div class="form-group mandatory">
                                    <label for="name" class="form-label">Waktu Kunjungan</label>
                                    <input type="date" name="waktu_kunjungan" class="form-control">
                                </div>
                                <div class="form-group mandatory">
                                    <label for="name" class="form-label">Whatsapp</label>
                                    <input type="number" name="whatsapp" class="form-control">
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
        
 
      
     
      $("#jumlah").val(x)
      if(x<11){
        $("#plus" + id).html(`
      <div class="input-group col-md-6 mb-3">
      <input type="text" class="form-control" name="atas_nama`+id+`" placeholder="Data Pengunjung `+x+`">
      <span class="input-group-text" id="T`+x+`" type = "button" onclick="plus(`+x+`)"><i class="fa fa-plus"></i></span>
      <span class="input-group-text" id="M`+x+`" type = "button" onclick="mins(`+x+`)"><i class="fa fa-times"></i></span>
      </div>
      <div id="plus`+x+`"></div>
      `);
      }
    
    }
    function mins(id)
    {
      var x = id - 1;
      document.getElementById("T" + x).style.display="block";
      document.getElementById("M" + x).style.display="block";
      $("#jumlah").val(x)
      $("#plus"+ x).html(`  `);
    }
 </script>   



<script>
    $(document).ready(function(){
        $("#nameid").select2({

        });
        $("#id_wisata").select2({

        });
    });
</script>

<script>
   function readpaket(){ 
        var id = $("#id_wisata").val();
        $.get("{{ url('tiketnormal/paket') }}/" + id, {}, function(data, status) {
          $("#paket").html(data);
      });
    }
 </script>

@endsection