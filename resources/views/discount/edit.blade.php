@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="{{ route('datamaster.fasilitas') }}"><i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;border-radius:0%"> 
                <div class="card-header">
                    <center>
                    <h5>Edit Fasilitas</h5>
                    </center>
                </div>
                <div class="card-body">
                    <form  method="POST" action="{{ route('datamaster.discount.update', $discount->id_discount) }}" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="kategori">Jenis Discount</label>
                                    <select type="text" class="form-select" name="jenis">
                                      <option disabled>-- Pilih Jenis --</option>
                                      <option @if ($discount->jenis == "persen")
                                        selected 
                                      @endif value="persen">Persen</option>
                                      <option @if ($discount->jenis == "nominal")
                                        selected 
                                      @endif  value="nominal">Nominal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="kategori">Discount</label>
                                    <input type="number" class="form-control" name="discount" value="{{$discount->discount}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mandatory">
                            <label for="kategori">Rentang Waktu Discount</label>
                            <div class="input-group"> 
                            <input type="date" class="form-control" name="dari" value="{{ $discount->dari }}">
                            <span class="input-group-text">-</span>
                            <input type="date" class="form-control" name="sampai" value="{{ $discount->dari }}>
                            </div>
                        </div>
                        <center>
                        <div class="mt-4" id="tombol_create">
                            <input class="btn btn-primary" type="submit" value="Edit">
                        </div>
                        </center>
                    </form>        
                </div>
               


            </div> 
        </div>
       

    </section>
    
</div>

@endsection