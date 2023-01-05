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
                            <th>Jadwal Pembayaran</th>
                            <th>Tanggal Pembayaran</th>
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
                            <td style="width:35%">{{ $historis->jadwal_pembayaran }}</td>
                            <td style="width:25%">{{ $historis->tanggal_pembayaran }}</td>
                            <td>{{ $historis->hbalance }}</td>
                            <td>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Lihat Bukti</a>
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
            <div id="bukti"></div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary"
                data-bs-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Close</span>
            </button>
            <button type="button" class="btn btn-success ml-1" data-bs-dismiss="modal">
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block"> <i class="bi bi-cloud-download"></i> Download</span>
            </button>
        </div>
    </div>
</div>
</div>

@endsection
<script>
    function bukti(id)
    {
        $.get("{{ url('pengunjung/detailhistory') }}/" + id, {}, function(data, status) {
                // jQuery.noConflict();
                // $("#exampleModalLabel").html('Edit Product')
                $("#bukti").html(`<img src="{{asset('/bukti/'.`+bukti+`)}}" alt="" width="200px">`);
                $("#exampleModalCenter").modal('show');
            });
    }
</script>