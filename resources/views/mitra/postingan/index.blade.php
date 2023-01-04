@extends('layouts.template')
@section('content')

<div class="container">
<h3>Daftar Postingan Mitra</h3>
    <br>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mitra</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mitra as $mitras)
                        <tr>
                            <td>1</td>
                            <td style="width:75%">{{$mitras->name}}</td>
                            <td>
                                <a href="{{route('mitra.postingan', $mitras->id_mitra)}}" class="btn btn-primary">Lihat Postingan</a>
                            </td>
                        </tr>
                        @endforeach
                       {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    
</div>

@endsection