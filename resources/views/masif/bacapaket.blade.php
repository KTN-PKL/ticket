<label for="kota">Paket Wisata</label>
<select name="kota" type="text" class="form-select @error('kota') is-invalid @enderror" value="--"  >
  <option selected disabled> Pilih Paket Wisata</option>
  {{-- @foreach($Regency as $regencies)
  <option value="{{$regencies->name}}">{{$regencies->name}}</option>
  @endforeach --}}
</select>

<script>
    function wisata(){ 
          var id = $("#kategori").val();
          $.get("{{ url('readwisata') }}/" + id, {}, function(data, status) {
            $("#bacawisata").html(data);
        });
      }
  </script>