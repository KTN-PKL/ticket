@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="#"><i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
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
                        <tr>
                            <td>1</td>
                            <td style="width:35%">Minggu ke 4, Desember 2022</td>
                            <td style="width:25%">02-12-2022</td>
                            <td>Rp. 500.000,-</td>
                            <td>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Lihat Bukti</a>
                            </td>
                        </tr>
                        {{-- @php
                        $i=0;
                        @endphp
                        @foreach($mitra as $mitras)
                        @php
                        $i=$i+1
                        @endphp
                        <tr>
                            <td>{{$i}}</td>
                            <td style="width:75%">{{$mitras->name}}</td>
                            <td>
                                <a href="{{route('mitra.postingan', $mitras->id_mitra)}}" class="btn btn-primary">Lihat Postingan</a>
                            </td>
                        </tr>
                        @endforeach --}}
                       {{-- @endforeach --}}
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
           <img src="#" alt="" width="200px">
           Bonbon caramels muffin. Chocolate bar oat cake cookie pastry dragée
           pastry. Carrot cake
           chocolate tootsie roll chocolate bar candy canes biscuit.
           Gummies bonbon apple pie fruitcake icing biscuit apple pie jelly-o sweet
           roll. Toffee sugar
           plum sugar plum jelly-o jujubes bonbon dessert carrot cake. Cookie
           dessert tart muffin topping
           donut icing fruitcake. Sweet roll cotton candy dragée danish Candy canes
           chocolate bar cookie.
           Gingerbread apple pie oat cake. Carrot cake fruitcake bear claw. Pastry
           gummi bears
           marshmallow jelly-o.
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