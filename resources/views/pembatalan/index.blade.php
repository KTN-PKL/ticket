@extends('layouts.template')
@section('content')
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
                        @php 
                        $i=0;
                        @endphp
                        @foreach($pembatalan as $pembatalans)
                        @php 
                        $i=$i+1;
                        @endphp
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$pembatalans->atas_nama}}</td>
                            <td>{{$pembatalans->whatsapp}}</td>
                            <td>
                                @if($pembatalans->status == "refund")
                                <span class="badge bg-danger">Refund</span>
                                @else
                                <span class="badge bg-warning">Process Refund</span>
                                @endif
                            </td>
                            <td>
                                <input type="text" hidden id="id{{ $i }}" value="{{ $pembatalans->kode_tiket }}">
                                <a href="{{route('pembatalan.detail', $pembatalans->kode_tiket)}}" class="btn btn-success"><i class="bi bi-eye"></i></a>
                                @if($pembatalans->status == "process refund")
                                <a href="https://api.whatsapp.com/send?phone=62{{$pembatalans->whatsapp}}&text=Kami%20dari%20admin%20ulinyuk.com" class="btn btn-primary" target="_blank">Hubungi</a>
                                <a href="#" class="btn btn-danger" onclick="batalkan({{ $i }})">Batalkan</a>
                                @else
                                <a href="#" class="btn btn-success" onclick="bukti({{ $i }})">Bukti Refund</a>
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
            <div id="form">
            
            </div>
            <center>
                <button id="dld" type="button" class="btn btn-success mt-4" data-bs-dismiss="modal" style="display: none">
                    {{-- <i class="bx bx-check d-block d-sm-none"></i> --}}
                    {{-- <div id="dld"></div> --}}
                   
                </button>
            </center>
           
         
        </div>
    </div>
</div>
</div>





<script>
    function batalkan(id)
    {
        var idt =  $("#id"+id).val();
        var action = "{{ url('pembatalan/batalkan') }}/" + idt
        
        $("#exampleModalCenter").modal('show');
        $("#form").html(` <form enctype="multipart/form-data" method="post" action="`+action+`">
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
                            <input type="file" name="bukti" >
                        </div>
                    </div>  
            </div> 
            <div class="mt-4" id="tombol_create">
                <center>
                    <input style="background-color: #FF0000;width:200px;" class="btn btn-danger"  type="submit" value="Refund">
                </center>
               
            </div>
          </form>`)
    }

    function bukti(id)
    {
        var idt =  $("#id"+id).val();
        $("#exampleModalCenter").modal('show');
        document.getElementById("dld").style.display = "block";
        $.get("{{ url('pembatalan/bukti') }}/" + idt, {}, function(data, status) {
                
                $("#form").html(`
                <center>
                <h4>Bukti Refund</h4>
           
            <div class="gambar">
                <img width="200px" alt="Profile" src="{{asset('/bukti/`+data+`')}}" >
            </div>
        </center>

                `);
                $("#dld").html(`
                <i class="bx bx-check d-block d-sm-none"></i>
                <a style="color:white; text-decoration:none" href="{{asset('/bukti/`+data+`')}}" download> <span class="d-none d-sm-block"> <i class="bi bi-cloud-download"></i> Download</span></a>`);
               
            });
    }
</script>

@endsection