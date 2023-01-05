@extends('layouts.template')
@section('content')
<a href="#"> <i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
<div class="container">
<h3>Daftar Pembatalan Tiket</h3>
    <br>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama PJ</th>
                            <th>Whatsapp</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td style="width:25%">PJ Sari Ater</td>
                            <td>082249021212</td>
                            <td>
                               <h6 style="color: #FF9900">Process Refund</h6> 
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-success"><i class="bi bi-whatsapp"></i> Hubungi</a>
                                <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"> <i class="bi bi-x-circle"></i> Batalkan Tiket</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>PJ Sari Ater</td>
                            <td>082249021212</td>
                            <td>
                               <h6 style="color: red">Refund</h6> 
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalCenter2"><i class="bi bi-receipt"></i> Bukti</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    
</div>

<!-- Vertically Centered modal Modal -->
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


<!-- Vertically Centered modal Modal -->
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
                <img src="" alt="xx" width="200px" height="200px">
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