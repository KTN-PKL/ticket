<label for="kota">Wisata Alam</label>
<select name="kota" type="text" class="form-select @error('kota') is-invalid @enderror" value="" id="wisata" onchange="readpaket()"  >
  <option selected disabled> Pilih Wisata Alam</option>
  {{-- @foreach($Regency as $regencies)
  <option value="{{$regencies->name}}">{{$regencies->name}}</option>
  @endforeach --}}
</select>

<script>
    function readpaket(){ 
          var id = $("#").val();
          $.get("{{ url('wisata') }}/" + id, {}, function(data, status) {
            $("#tampilwisata").html(data);
        });
      }
  </script>