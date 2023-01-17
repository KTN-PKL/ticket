@extends('layouts.template')
@section('content')
<div class="col mt-2">
  <a href="{{route('pengguna')}}"><i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;border-radius:0%"> 
      
                <div class="card-body mt-4">
                  <center>
                    <h5>Create Users</h5>
                    </center>
                    <br>
                    <form enctype="multipart/form-data" method="POST" action="{{ route('pengguna.store') }}" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Masukkan Nama " name="name" data-parsley-required="true">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group mandatory">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email " name="email" value="{{old('email')}}" data-parsley-required="true">
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group mandatory">
                                  <label for="username" class="form-label">Username</label>
                                  <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Masukkan Username " name="username" value="{{old('username')}}" data-parsley-required="true">
                               @error('username')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>
                                <div class="form-group mandatory">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password " name="password" data-parsley-required="true">
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group mandatory">
                                    <label for="password-confirmation" class="form-label">Password Konfirmasi</label>
                                    <input type="password" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Masukkan Password-confirmation " name="password_confirmation" data-parsley-required="true">
                                 @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="whatsapp" class="form-label">Whatsapp</label>
                                    <div class="input-group mb-3">
                                      <span class="input-group-text" id="basic-addon1">+62</span>
                                      <input type="number" name="kontak" class="form-control @error('kontak') is-invalid @enderror" placeholder="81286216470" value="{{old('kontak')}}">
                                  </div>
                                  
                                </div>
                                <div class="form-group">
                                  <label for="foto" class="form-label">Upload Foto</label>
                                      <div class="card">
                                          <div style="border:1px solid grey;border-style:dashed;" class="card-body">
                                              <center>
                                                  <i class="bi bi-cloud-upload bi-5x" style="font-size:48px"></i>
                                              </center>
                                              <!-- File uploader with multiple files upload -->
                                              <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" data-parsley-required="true" >
                                              @error('foto')
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

@endsection