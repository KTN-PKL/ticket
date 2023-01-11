<label>Paket</label>
<select type="text" id="id_paket" onchange="test()" class="form-select" name="id_paket">
  <option>-- Pilih Paket --</option>
   @foreach($paket as $pakets)
  <option value="{{$pakets->id_paket}}" @if ($pakets->id_paket == $masif->id_paket)   
    selected
  @endif>{{$pakets->paket}}</option>
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