<label>Wisata</label>
<select type="text" id="id_wisata" onchange="readpaket({{ $masif->id_masif }})" class="form-select" >
  <option selected disabled>-- Pilih Kategori --</option>
   @foreach($wisata as $wisatas)
  <option value="{{$wisatas->id_wisata}}" @if ($wisatas->id_wisata == $masif->id_wisata)   
    selected
  @endif>{{$wisatas->wisata}}</option>
 @endforeach
</select>

<script>
  $(document).ready(function() {
    readpaket({{ $masif->id_masif }})
        });
  function readpaket(idm){ 
        var id = $("#id_wisata").val();
        $.get("{{ url('masif/paket') }}/"+id+"/" + idm, {}, function(data, status) {
          $("#paket").html(data);
      });
    }
</script>