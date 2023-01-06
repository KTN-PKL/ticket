@extends('layouts.template')
@section('content')
<div class="col mt-2">
  <a href="{{route('profil')}}"><i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;border-radius:0%"> 
      
                <div class="card-body mt-4">
                  <center>
                    <h5>Edit Users</h5>
                    </center>
                    <br>
                    <form enctype="multipart/form-data" method="POST" action="{{ route('profil.update', Auth::user()->id) }}" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" value="{{$admin->name}}" placeholder="Masukkan Nama " name="name" data-parsley-required="true">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group mandatory">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email " name="email" value="{{$admin->email}}" data-parsley-required="true" readonly>
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group mandatory">
                                  <label for="username" class="form-label">Username</label>
                                  <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Masukkan Username " name="username" value="{{$admin->username}}" data-parsley-required="true" readonly>
                               @error('username')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <small class="text-muted"><i>Inputkan password jika ingin mengubah</i></small>
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password " name="password">
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password-confirmation" class="form-label">Password Konfirmasi</label>
                                    <input type="password" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Masukkan Password-confirmation " name="password_confirmation">
                                 @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="form-group mandatory">
                                <label for="posisi" class="form-label">Posisi</label>
                                <input type="text" id="posisi" class="form-control @error('posisi') is-invalid @enderror" placeholder="Masukkan Nomor Whatsapp " name="posisi" value="{{$admin->posisi}}" data-parsley-required="true">
                                @error('posisi')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                                <div class="form-group mandatory">
                                  <label for="kontak" class="form-label">Whatsapp</label>
                                  <input type="number" id="kontak" class="form-control @error('kontak') is-invalid @enderror" placeholder="Masukkan Nomor Whatsapp " name="kontak" value="{{$admin->kontak}}" data-parsley-required="true">
                                  @error('kontak')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                  <label for="foto" class="form-label">Upload Foto</label>
                                      <div class="card">
                                          <div style="border:1px solid grey;border-style:dashed;" class="card-body">
                                              <center>
                                                  <i class="bi bi-cloud-upload bi-5x" style="font-size:48px"></i>
                                              </center>
                                              <!-- File uploader with multiple files upload -->
                                              <input type="file" name="foto">
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

@endsection