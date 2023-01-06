@extends('layouts.template')
@section('content')
{{-- <a href="{{route('mitra.postingan', $)}}"> <i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a> --}}
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container">
<h3>Daftar Feedback</h3>

   
    <br>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=0;
                        @endphp
                        @foreach($feedback as $feedbacks)
                        @php
                        $i=$i+1;
                        @endphp
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$feedbacks->email}}</td>
                            <td>
                                @if($feedbacks->status_pesan == "unread")
                                <span class="badge bg-warning">Unread</span>
                                @else
                                <span class="badge bg-success">Read</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('feedback.detail', $feedbacks->id_feedback)}}" class="btn btn-primary"><i class="bi bi-eye"></i> Lihat</a>
                            </td>
                          
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    
</div>

@endsection