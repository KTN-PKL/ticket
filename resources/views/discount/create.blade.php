@extends('layouts.template')
@section('content')
<div class="col mt-2">
    <a href="{{ route('datamaster.fasilitas') }}"> <i class="bi bi-arrow-left-circle-fill" style="font-size: 24px"></i></a>
</div>
<div class="container mt-2" style="background-color: white">
    <br>
    <section class="section">
        <div class="col-md-12">
            <div class="card mt-2" style="border: 1px solid rgb(85, 85, 85);margin-left:2em;margin-right:2em;border-radius:0%"> 
                <div class="card-header">
                    <center>
                    <h5>Create Discount</h5>
                    </center>
                </div>
                <div class="card-body">
                    <form  method="POST" action="{{ route('datamaster.discount.store') }}" class="form" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="kategori">Kategori</label>
                                    <select type="text" class="form-select" onchange="readwisata()" id="kategori">
                                      <option selected disabled>-- Pilih Kategori --</option>
                                      @foreach($kategori as $kategoris)
                                      <option value="{{$kategoris->id_kategori}}">{{$kategoris->kategori}}</option>
                                      @endforeach
                                    </select>
                                </div>
                                <div id="cwisata"></div>
                                <div id="cpaket"></div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mandatory">
                                    <label for="kategori">Jenis Discount</label>
                                    <select type="text" class="form-select" name="jenis">
                                      <option selected disabled>-- Pilih Jenis --</option>
                                      <option value="persen">Persen</option>
                                      <option value="nominal">Nominal</option>
                                    </select>
                                </div>
                                <div class="form-group mandatory">
                                    <label for="kategori">Discount</label>
                                    <input type="number" class="form-control" name="discount" placeholder="Masukan Discount">
                                </div>
                            </div>
                        </div>
                        <center>
                        <div class="mt-4" id="tombol_create">
                            <input class="btn btn-primary" type="submit" value="Create">
                        </div>
                        </center>
                    </form>        
                </div>
            </div> 
        </div>
    </section>
</div>

@endsection
<script>
    function readwisata()
    {
        var id = $("#kategori").val();
        $.get("{{ url('datamaster/discount/cwisata') }}/"+id, {}, function(data, status) {
          $("#cwisata").html(data);
        });
    }
</script>