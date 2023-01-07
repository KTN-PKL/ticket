<label>Paket</label>
<select type="text" id="id_paket" onchange="harga()" class="form-select" >
  <option>-- Pilih Paket --</option>
   @foreach($paket as $pakets)
  <option value="{{$pakets->id_paket}}" @if ($pakets->id_paket == $masif->id_paket)   
    selected
  @endif>{{$pakets->paket}}</option>
 @endforeach
</select>
<script>
function harga()
{
  var id = $("#id_paket").val();
  var tgl = $("#tgl").val();
  $.get("{{ url('masif/harga') }}/"+id+"/" + tgl, {}, function(data, status) {
          $("#wisata").html(data);
      });
}
</script>