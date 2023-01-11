@extends('layouts.template')
@section('content')
<div class="col mt-2">
  <a href="{{route('masif')}}"> <i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;border-radius:0%"> 
                <div class="card-body">
                    <center>
                    <h5>Edit Tiket Masif</h5>
                    </center>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('masif.update', $masif->id_masif) }}" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="name" class="form-label">Nama Penanggung Jawab</label>
                                    <input type="text" id="name" value="{{ $masif->name }}" placeholder="Masukkan Nama Penanggung Jawab" readonly class="form-control">
                                </div>
                                <div class="form-group mandatory">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" id="nik" class="form-control @error('nik') is-invalid @enderror" placeholder="Masukkan NIK Penanggung Jawab" name="nik" value="{{ $masif->nik }}">
                                 @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group mandatory">
                                    <label for="username" class="form-label">Email</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Masukkan Email Penanggung Jawab"  value="{{ $masif->email }}" readonly>
                                 @error('username')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>

                                 <div class="form-group mandatory">
                                    <label for="whatsapp" class="form-label">Whatsapp</label>
                                    <input type="number" class="form-control" value="{{$masif->kontak}}"  data-parsley-required="true" readonly>
                                </div>
                                <div class="form-group mandatory">
                                  <label for="Jumlah" class="form-label">Jumlah Pengunjunf</label>
                                  <input type="number" class="form-control" value="{{$masif->qty}}"  data-parsley-required="true" name="qty">
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="form-group mandatory">
                                <label for="nik" class="form-label">Waktu_kunjungan</label>
                                <input type="date" id="waktu" class="form-control"  name="waktu_kunjungan" value="{{ $masif->waktu_kunjungan }}">
                             @error('waktu_kunjungan')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                            @php
                                $d = strtotime($masif->waktu_kunjungan);
                                $N = date('l' ,$d);
                            @endphp
                            <input type="text" hidden value="{{ $N }}" id="tgl">
                              <div class="form-group mandatory">
                                <label for="kategori">Kategori</label>
                                <select name="kategori" type="text" class="form-select" onchange="readwisata({{ $masif->id_masif }})" id="kategori">
                                  <option selected disabled>-- Pilih Kategori --</option>
                                  @foreach($kategori as $kategoris)
                                  <option value="{{$kategoris->id_kategori}}" @if ($kategoris->id_kategori == $masif->id_kategori)   
                                    selected
                                  @endif>{{$kategoris->kategori}}</option>
                                  @endforeach
                                </select>
                            </div>
                            <div id="wisata" class="form-group mandatory">
                            
                            </div>
                            <div id="paket" class="form-group mandatory">
                            </div>
                
                        <div class="form-group mandatory">
                          <label for="username" class="form-label">Harga</label>
                          <input type="number" id="harga" class="form-control" placeholder="Masukkan Harga Satuan" name="harga" @if ($masif->harga == null)
                              @if ($N == "Saturday" || $N == "Sunday")
                              value="{{ $masif->harga_wend }}"
                              @else
                              value="{{ $masif->harga_wday }}"
                              @endif
                          @else
                          value="{{ $masif->harga }}"
                          @endif
                           data-parsley-required="true">
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

<script>
   $(document).ready(function() {
    readwisata({{ $masif->id_masif }})
        });
  function readwisata(idm){ 
        var id = $("#kategori").val();
        $.get("{{ url('masif/wisata') }}/"+id+"/" + idm, {}, function(data, status) {
          $("#wisata").html(data);
      });
    }
</script>

@endsection