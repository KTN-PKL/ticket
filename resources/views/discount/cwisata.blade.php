<div class="form-group mandatory">
    <label for="kategori">Wisata</label>
    <select type="text" class="form-select" onchange="readpaket()" id="wisata">
      <option selected disabled>-- Pilih Wisata --</option>
      @foreach($wisata as $wisatas)
      <option value="{{$wisatas->id_wisata}}">{{$wisatas->wisata}}</option>
      @endforeach
    </select>
</div>

<script>
     function readpaket()
    {
        var id = $("#wisata").val();
        $.get("{{ url('datamaster/discount/cpaket') }}/"+id, {}, function(data, status) {
          $("#cpaket").html(data);
        });
    }
</script>