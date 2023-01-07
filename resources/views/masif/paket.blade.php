<label>Paket</label>
<select type="text" id="paket" onchange="read({{ $masif->id_masif }})" class="form-select" >
  <option>-- Pilih Paket --</option>
   @foreach($paket as $pakets)
  <option value="{{$pakets->id_paket}}" @if ($pakets->id_paket == $masif->id_paket)   
    selected
  @endif>{{$pakets->paket}}</option>
 @endforeach
</select>
