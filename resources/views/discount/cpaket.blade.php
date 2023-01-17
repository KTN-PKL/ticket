<div class="form-group mandatory">
    <label for="kategori">Paket</label>
    <select type="text" class="form-select" name="id_paket">
      <option selected disabled>-- Pilih Paket --</option>
      @foreach($paket as $pakets)
      <option value="{{$pakets->id_paket}}">{{$pakets->paket}}</option>
      @endforeach
    </select>
</div>