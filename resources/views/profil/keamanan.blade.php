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
                    <h5>Password & Keamanan</h5>
                    </center>
                    <br>
                    <form enctype="multipart/form-data" method="POST" action="{{ route('profil.update2', Auth::user()->id) }}" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
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