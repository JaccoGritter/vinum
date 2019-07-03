@extends('layouts.mainlayout')

@section('leftcontent')

<h3>Zoek uw wijn:</h3>

<form action="/action_page.php" method="get">
  <div class="form-group">
    <label for="merk">Merk:</label>
    <input type="text" class="form-control" id="merk">
  </div>

  <div class="form-group">
  <label for="type">Type</label>
        <select class="form-control" id="type" name="type">
            <option value="">Alle</option>
            <option value="Rood">Rood</option>
            <option value="Wit">Wit</option>
            <option value="Rose">Rosé</option>
        </select>
  </div>

  <div class="form-group">
  <label for="land">Land</label>
        <select class="form-control" id="land" name="land">
            <option value="">Alle</option>
            <option value="Frankrijk">Frankrijk</option>
            <option value="Spanje">Spanje</option>
            <option value="Zuid-Afrika">Zuid-Afrika</option>
            <option value="Chili">Chili</option>
            <option value="Australie">Australië</option>
        </select>
  </div>

  <div class="form-group">
    <label for="druif">Druivensoort</label>
    <input type="text" class="form-control" id="druif">
  </div>
  
  <button type="submit" class="btn btn-primary">Zoek</button>
</form>

@endsection

@section('rightcontent')

<br><br>
<div>
<h3>Wijn van de maand<h3>
</div>
<br><br><br><br><br>
<div>
<h3>Aanbiedingen<h3>
</div>
@endsection