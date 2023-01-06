@extends('layouts.template')
@section('content')
<div class="container">
<h3>Daftar Berita & Informasi</h3>
<div class="col mt-4">
    <a href="{{route('berinfo.create')}}" class="btn btn-primary">Create</a>
</div>
    <br>
    <section class="section">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                        $i=0
                        @endphp
                        @foreach($berinfo as $berinfos)
                        @php 
                        $i=$i+1;
                        @endphp
                        <tr>
                            <td><h6>{{$i}}</h6></td>
                            <td style="width:25%"><h6>{{$berinfos->judul}}</h6></td>
                            <td><h6>{{$berinfos->jenis}}</h6></td>
                            <td>
                                @if($berinfos->statusbi == "Inactive")
                               <span class="badge bg-danger">Inactive</span> 
                               @else
                               <span class="badge bg-success">Active</span> 
                               @endif
                            </td>
                            <td>
                                <a href="{{route('berinfo.detail', $berinfos->id_beritainformasi)}}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                <a href="{{route('berinfo.edit', $berinfos->id_beritainformasi)}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{route('berinfo.destroy', $berinfos->id_beritainformasi)}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                @if($berinfos->statusbi == "Inactive")
                                <a href="{{route('berinfo.active', $berinfos->id_beritainformasi)}}" class="btn btn-success">Active</a>
                                @else
                                <a href="{{route('berinfo.inactive', $berinfos->id_beritainformasi)}}" class="btn btn-danger">Inactive</a>
                                @endif
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    
</div>

<!-- Modal Refund -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="modal-body">
          <form enctype="multipart/form-data" action="">
            @csrf
            <div class="form-group">
                <center>
                    <label for="foto" class="form-label">Upload Bukti Refund</label>
                </center>
                    <div class="card">
                        <div style="border:1px solid grey;border-style:dashed;" class="card-body">
                            <center>
                                <i class="bi bi-cloud-upload bi-5x" style="font-size:48px"></i>
                            </center>
                            <!-- File uploader with multiple files upload -->
                            <input type="file" name="#" >
                        </div>
                    </div>  
            </div> 
            <div class="mt-4" id="tombol_create">
                <center>
                    <input style="background-color: #FF0000;width:200px;" class="btn btn-danger"  type="submit" value="Refund">
                </center>
               
            </div>
          </form>
        </div>
    </div>
</div>
</div>


<!-- Modal Bukti -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="modal-body">
            <center>
                <h4>Bukti Refund</h4>
            </center>
            <div class="gambar">
                <img class="img-fluid" src="{{('template')}}/dist/assets/images/logo/logoulinyuk.png" alt="Logo" srcset="" width="99%"></a>
            </div>
          
            <div class="mt-4" id="tombol_create">
                <center>
                    <input style="background-color: green;width:200px;" class="btn btn-secondary"  type="submit" value="Download">
                </center>
               
            </div>
          </form>
        </div>
    </div>
</div>
</div>

@endsection