@extends('layouts.template')
@section('content')
<a href="#"> <i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
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
                        <tr>
                            <td>1</td>
                            <td>PJ Sari Ater</td>
                            <td>082249021212</td>
                            <td>
                               <h6 style="color: #FF9900">Process Refund</h6> 
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-success"><i class="bi bi-whatsapp"></i></a>
                                <a href="#" class="btn btn-danger"> <i class="bi bi-x-circle"></i> Batalkan Tiket</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>PJ Sari Ater</td>
                            <td>082249021212</td>
                            <td>
                               <h6 style="color: red">Refund</h6> 
                            </td>
                            <td>
                                <a href="#" class="btn btn-success"><i class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-success"><i class="bi bi-receipt"></i>Bukti</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    
</div>

@endsection