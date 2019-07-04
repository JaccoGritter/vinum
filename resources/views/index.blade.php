@extends('layouts.mainlayout')

@section('leftcontent')

<h3>Zoek uw wijn:</h3>

<form action="/search" method="get">
  <div class="form-group col-md-7">
    <label for="brand">Merk:</label>
    <input type="text" class="form-control" id="brand" name="brand">
  </div>

  <div class="form-group col-md-7">
    <label for="name">Naam</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

  <div class="form-group col-md-7">
  <label for="variety">Type</label>
        <select class="form-control" id="variety" name="variety">
            <option value="">Alle</option>
            <option value="Rood">Rood</option>
            <option value="Wit">Wit</option>
            <option value="Rosé">Rosé</option>
        </select>
  </div>

  <div class="form-group col-md-7">
  <label for="country">Land</label>
        <select class="form-control" id="country" name="country">
            <option value="">Alle</option>
            <option value="Frankrijk">Frankrijk</option>
            <option value="Spanje">Spanje</option>
            <option value="Zuid-Afrika">Zuid-Afrika</option>
            <option value="Chili">Chili</option>
            <option value="Australie">Australië</option>
        </select>
  </div>
  
  <button type="submit" class="btn btn-primary ml-3">Zoek</button>
</form>

@endsection

@section('rightcontent')

<br><br>
<div>
<h3>Wijn van de maand<h3>
</div>
<br>

    <h5>{{ $wine->brand }}</h5>
    <h5>{{ $wine->name }}</h5>
    <h5><b><em>Van <strike>€{{(number_format( $wine->price, 2 , "," , ".")) }}</strike> voor €{{(number_format( $wine->price * 0.80, 2 , "," , ".")) }}</em></b></h5>
    <img src="{{$wine->picture()}}" alt="wijn">

@endsection