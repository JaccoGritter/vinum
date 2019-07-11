@extends('layouts.mainlayout')

@section('leftcontent')

<h5>Verzendgegevens:</h5>
<form action="/search" method="get">
    <div class="form-group">
      <input type="text" class="form-control" id="naam" name="naam" value="{{Auth::user()->name}}" readonly>
    </div>
    <div class="form-group">
      <input  type="text" class="form-control zip" id="straatnaam" name="straatnaam" placeholder="Straatnaam">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="huisnummer" name="huisnummer" placeholder="Huisnummer" ">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Postcode">
    </div>
    <div class="form-group">
      <input  type="text" class="form-control" id="woonplaats" name="woonplaats" placeholder="Woonplaats" onblur="displayPayBtn()">
    </div>
    
</form>

    

@endsection

@section('rightcontent')

<br><br>

<h4>U heeft in uw winkelmandje:</h4>

<div class="pl-3">
            <table class="table table-sm table-dark">
            <th>Merk</th><th>Naam</th><th>Prijs</th><th>Aantal</th>
            @foreach($wines as $wine)
            <tr><td>{{$wine->brand}}</td><td>{{$wine->name}}</td><td>€{{ number_format($wine->pivot->myprice, 2) }}</td><td>{{$wine->pivot->quantity}}</td><td></td></tr>
            @endforeach
            <tr><td><td><td><td></td></td></td></td></tr>
            <tr><td></td><td></td><td><b>€{{ number_format(Auth::user()->getOrderValue(),2)}}</b></td><td><b>{{Auth::user()->getCartQuantity()}}</b></td></tr>
            </table>
        </div>

        <a href="{{ route('pay') }}" class="btn btn-primary" role="button" id="paybutton" style="display:none">Betalen</a>
       
<script>
    function displayPayBtn() {
        if( $("#straatnaam").val() != "" && $("#huisnummer").val() != "" && $("#postcode").val() != "" && $("#woonplaats").val() != "" )
        {
            $("#paybutton").show();
        }
    }
       
</script>
@endsection
