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
                        <div  class="col-md-5">  
                            <table>
                                <tr>
                                    <td style="width:85%"><h6>Nama</h6></td>
                                    <td><h6>:</h6></td>
                                    <td><h6>ss</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Email</h6></td>
                                    <td><h6>:</h6></td>
                                    <td><h6>ss</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Username</h6></td>
                                    <td><h6>:</h6></td>
                                    <td><h6>ss</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Whatsapp</h6></td>
                                    <td><h6>:</h6></td>
                                    <td><h6>ss</h6></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-2">
                            <center>
                                <div style="border:1px solid black;height:150px;width:0px;"></div>
                            </center>
                            
                        </div>
                        <div class="col-md-5">
                            <div>
                                <center>
                                    <h6>Deskripsi</h6>
                                </center>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin maximus est at magna cursus rutrum. Sed nec pharetra erat. Quisque commodo gravida viverra.</p>
                            </div>
                           
                        </div>

                    </div>

                </div>
               


            </div> 
        </div>
       

    </section>
    
</div>

@endsection