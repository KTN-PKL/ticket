<label class="form-label">Paket</label>
<select type="text" id="id_paket" onchange="test()" name="id_paket" class="form-select"   >
  <option selected disabled>-- Pilih Paket --</option>
   @foreach($paket as $pakets)
  <option value="{{$pakets->id_paket}}">{{$pakets->paket}}</option>
 @endforeach
</select>

<script>
  function test()
 {
   var id = $("#id_paket").val();
   var tgl = $("#tgl").val();
   $.get("{{ url('masif/harga') }}/"+id+"/" + tgl, {}, function(data, status) {
           $("#harga").val(data);
       });
 }
 </script>

