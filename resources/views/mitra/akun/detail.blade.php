@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="#" class="btn btn-primary">Kembali</a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;border-radius:0%"> 
                <div class="card-header">
                    <center>
                    <h5>Detail Mitra</h5>
                  
                    <img class="img-fluid mt-2" width="10%" src="{{asset('template')}}/default.png" alt="" style="border-radius: 50%">
                    </center>
                </div>
                <div class="card-body" style="margin-left:6em;margin-right:6em;">
                    <div class="row">
                        <div  class="col-md-6">  
                            <table>
                                <tr>
                                    <td style="width:45%">Nama</td>
                                    <td>:</td>
                                    <td>Sari Ater Corp</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>sariater@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td>sariater07</td>
                                </tr>
                                <tr>
                                    <td>Whatsapp</td>
                                    <td>:</td>
                                    <td>082249025414</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <div style="margin-left:4em">
                                <center>
                                    <h6>Deskripsi</h6>
                                </center>
                                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin maximus est at magna cursus rutrum. Sed nec pharetra erat. Quisque commodo gravida viverra.</p>
                            </div>
                           
                        </div>

                    </div>

                </div>
               


            </div> 
        </div>
       

    </section>
    
</div>

@endsection