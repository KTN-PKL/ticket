@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="{{ route('pengunjung') }}"><i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
</div>
<div class="container">
<h3>History Balance Mitra, Sari Ater Corp</h3>
    <br>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Jumlah Checkin</th>
                            <th>Balance</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($histori as $historis)
                        <tr>
                            <td>@php
                                $i = $i + 1;
                                echo $i;
                            @endphp</td>
                            <td style="width:35%">{{ $historis->tanggal_pembayaran }}</td>
                            <td style="width:25%">40<i class="bi bi-people"></i></td>
                            <td>{{ $historis->hbalance }}</td>
                            <td>
                                <a href="#" class="btn btn-primary" onclick="bukti({{ $historis->id_balance }})">Lihat Bukti</a>
                            </td>
                        </tr>
                        @endforeach
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
            <h5 class="modal-title" id="exampleModalCenterTitle">Bukti Pembayaran Mingguan
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal"aria-label="Close"><i data-feather="x"></i>
            </button>
        </div>
        <div class="modal-body">
            <center>
                <div id="bukti"></div>
            </center>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary"
                data-bs-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Close</span>
            </button>
            <button type="button" class="btn btn-success ml-1" data-bs-dismiss="modal">
                <i class="bx bx-check d-block d-sm-none"></i>
                <div id="dld"></div>
               
            </button>
        </div>
    </div>
</div>
</div>

@endsection
<script>
    function bukti(id)
    {
        $("#exampleModalCenter").modal('show');
        $.get("{{ url('pengunjung/detailhistori') }}/" + id, {}, function(data, status) {
                
                $("#bukti").html(`<img width="200px" alt="Profile" src="{{asset('/bukti/`+data+`')}}" >`);
                $("#dld").html(`<a style="color:white; text-decoration:none" href="{{asset('/bukti/`+data+`')}}" download> <span class="d-none d-sm-block"> <i class="bi bi-cloud-download"></i> Download</span></a>`);
               
            });
    }
</script>
