@extends('layouts.template')
@section('content')
<div class="col mt-2">
  <a href="#"> <i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
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
                    <form enctype="multipart/form-data" method="POST" action="#" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="name" class="form-label">Nama Penanggung Jawab</label>
                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" value="#" placeholder="Masukkan Nama Penanggung Jawab" name="name" readonly>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group mandatory">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan NIK Penanggung Jawab" name="email" value="#">
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group mandatory">
                                    <label for="username" class="form-label">Email</label>
                                    <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Masukkan Email Penanggung Jawab" name="username" value="{{old('username')}}">
                                 @error('username')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                 <div class="form-group mandatory">
                                    <label for="whatsapp" class="form-label">Whatsapp</label>
                                    <input type="number" id="kontak" class="form-control @error('kontak') is-invalid @enderror" placeholder="Masukkan Nomor Whatsapp Mitra" name="kontak" value="{{old('kontak')}}">
                                 @error('kontak')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="form-group mandatory">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select type="text" id="kategori" class="form-select" placeholder="Masukkan Kategori Wisata" name="id_kategori" data-parsley-required="true">
                                  {{-- <option selected>--Pilih Kategori--</option>
                                  @foreach ($kategori as $kategoris)
                                  <option value="{{ $kategoris->id_kategori }}">{{ $kategoris->kategori }}</option>
                                  @endforeach --}}
                                </select>    
                            </div>
                            <div class="form-group mandatory">
                              <label for="kategori" class="form-label">Wisata Alam</label>
                              <select type="text" id="kategori" class="form-select" placeholder="Masukkan Kategori Wisata" name="id_kategori" data-parsley-required="true">
                                {{-- <option selected>--Pilih Kategori--</option>
                                @foreach ($kategori as $kategoris)
                                <option value="{{ $kategoris->id_kategori }}">{{ $kategoris->kategori }}</option>
                                @endforeach --}}
                              </select>    
                          </div>
                          <div class="form-group mandatory">
                            <label for="kategori" class="form-label">Pilih Paket</label>
                            <select type="text" id="kategori" class="form-select" placeholder="Masukkan Kategori Wisata" name="id_kategori" data-parsley-required="true">
                              {{-- <option selected>--Pilih Kategori--</option>
                              @foreach ($kategori as $kategoris)
                              <option value="{{ $kategoris->id_kategori }}">{{ $kategoris->kategori }}</option>
                              @endforeach --}}
                            </select>    
                        </div>
                        <div class="form-group mandatory">
                          <label for="username" class="form-label">Harga</label>
                          <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Masukkan Harga Satuan" name="username" value="#">
                       @error('username')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
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