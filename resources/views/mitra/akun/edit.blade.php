@extends('layouts.template')
@section('content')
<div class="col mt-2">
  <a href="{{route('mitra.akun')}}"><i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;border-radius:0%"> 
                <div class="card-header">
                    <center>
                    <h5>Edit Mitra</h5>
                    </center>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data"  method="POST" action="{{ route('mitra.akun.update',$mitra->id_mitra) }}" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="name" class="form-label">Nama Mitra</label>
                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" value="{{$mitra->name}}" placeholder="Masukkan Nama Mitra" name="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group mandatory">
                                    <label for="emailmitra" class="form-label">Email</label>
                                    <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email Mitra" name="email"  value="{{$mitra->email}}" readonly>
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group mandatory">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Masukkan Username Mitra" name="username"  value="{{$mitra->username}}" readonly>
                                 @error('username')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <small class="text-muted"><i>Input jika ingin mengubah password</i> </small>
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password Mitra" name="password">
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password-confirmation" class="form-label">Password Konfirmasi</label>
                                    <input type="password" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Masukkan Konfirmasi Password" name="password_confirmation">
                                 @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group mandatory">
                                  <label for="whatsapp" class="form-label">Whatsapp</label>
                                  <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                    <input type="number" name="kontak" class="form-control @error('kontak') is-invalid @enderror" placeholder="81286216470" value="{{$mitra->kontak}}">
                                </div>
                                
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="foto" class="form-label">Upload Foto</label>
                                    
                                    <input type="file" id="foto" class="form-control @error('foto') is-invalid @enderror" placeholder="Masukkan Foto Mitra" name="foto" value="{{$mitra->foto}}">
                                 @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group mandatory">
                                    <label for="deskripsi_mitra" class="form-label">Deskripsi Mitra</label>
                                    <textarea type="text" id="deskripsi" class="form-control @error('deskripsi_mitra') is-invalid @enderror" placeholder="Masukkan deskripsi Mitra" name="deskripsi_mitra">{{$mitra->deskripsi_mitra}}"</textarea>
                                @error('deskripsi_mitra')
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