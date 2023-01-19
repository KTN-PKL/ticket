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
                            <th>Tanggal</th>
                            <th>Jumlah Check-in</th>
                            <th>Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($harian as $harians)
                        <tr>
                            <td>@php
                                $i = $i + 1;
                                echo $i;
                            @endphp</td>
                            <td style="width:35%">
                            @php
                                $d = strtotime($harians->tanggal);
                                echo date("l, d-m-Y", $d);
                            @endphp
                            </td>
                            <td>@php $jumlahchekin = number_format($harians->harchekin,0,",","."); echo $jumlahchekin; @endphp  <i class="bi bi-people"></i></td>
                            <td style="width:30%">@php
                                $balance = number_format($harians->harbalance,0,",",".");
                                echo "Rp.".$balance.",-";
                            @endphp</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    
</div>

@endsection
