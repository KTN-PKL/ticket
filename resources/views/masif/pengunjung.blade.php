<style>
    .badge-info {
   color: #ebeef0;
   background-color: #F96A2C;
}
</style>

@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="#"><i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
</div>
<div class="container">
<h3>Daftar Pengunjung Mitra, Sari Ater Corp</h3>
    <br>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengunjung</th>
                            <th>Tempat Wisata</th>
                            <th>Whatsapp</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td style="width:25%">Aji Santoso</td>
                            <td style="width:25%">Sari Ater Hotel & Resort</td>
                            <td>0822490254144</td>
                            <td>
                                <span class="badge bg-success"><i class="bi bi-patch-check" style="font-size: 18px"></i> Check-in</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td style="width:25%">Aji Santoso</td>
                            <td style="width:25%">Sari Ater Hotel & Resort</td>
                            <td>0822490254144</td>
                            <td>
                                <span class="badge bg-danger"><i class="bi bi-x-circle" style="font-size: 18px"></i> Expired</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td style="width:25%">Aji Santoso</td>
                            <td style="width:25%">Sari Ater Hotel & Resort</td>
                            <td>0822490254144</td>
                            <td>
                                <span class="badge bg-warning">
                                    <svg style="width:18px;height:18px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M12.3 8.93L9.88 6.5H15.5V10H17V5H9.88L12.3 2.57L11.24 1.5L7 5.75L11.24 10L12.3 8.93M12 14A3 3 0 1 0 15 17A3 3 0 0 0 12 14M3 11V23H21V11M19 19A2 2 0 0 0 17 21H7A2 2 0 0 0 5 19V15A2 2 0 0 0 7 13H17A2 2 0 0 0 19 15Z" />
                                    </svg> Process Refund</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td style="width:25%">Aji Santoso</td>
                            <td style="width:25%">Sari Ater Hotel & Resort</td>
                            <td>0822490254144</td>
                            <td>
                                <span class="badge badge-info"><i class="bi bi-arrow-repeat" style="font-size: 18px"></i> Refund</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td style="width:25%">Aji Santoso</td>
                            <td style="width:25%">Sari Ater Hotel & Resort</td>
                            <td>0822490254144</td>
                            <td>
                                <span class="badge bg-primary"><i class="bi bi-calendar-check" style="font-size: 18px"></i> Available</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
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

@endsection