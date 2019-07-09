@extends('layouts.mainlayout')

@section('leftcontent')
<br><br>
<h4>Laat weten wat je vind van {{ $wine->brand }} {{ $wine->name }}:</h4><br>

<form method="POST" action="/addreview">
        <!-- {{ CSRF_field() }} -->
        @csrf
        <input type="hidden" id="wineId" name="wine_id" value="{{$wine->id}}">
        <div class="form-group col-md-8">
            <label for="screen_name">Naam die bij de review getoond wordt:</label>
            <input type="text" class="form-control" name="screen_name" value="{{old('screen_name')}}">
        </div>

        <div class="form-group col-md-8">
            <label for="stars">Aantal sterren (0-5):</label>
            <input type="number" class="form-control" name="stars" min="0" max="5" value="{{old('stars')}}" required >
        </div>

        <div class="form-group col-md-8">
            <!-- <label for="comment">Review:</label> -->
            <textarea class="form-control" name="comment" placeholder="Review" rows="3" id="comment" value="{{old('comment')}}"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-1">Voeg toe</button>

    </form> 

@endsection

@section('rightcontent')
<br>
<h4>{{ $wine->brand }} {{ $wine->name }}</h4>
<br>
<img src=" {{ $wine->picture() }} ">
<br>
<div class="mt-3 pl-3">
    <table align="center" class="table table-sm table-dark col-md-8">
    <tr><th>Type:</th><td>{{$wine->variety}}</td></tr>
    <tr><th>Druif:</th><td>{{$wine->grapes}}</td></tr>
    <tr><th>Herkomst:</th><td>{{$wine->country}}</td></tr>
    <tr><th>Alcohol:</th><td>{{$wine->alcperc}}%</td></tr>
    <tr><th>Omschrijving:</th><td>{{$wine->description}}</td></tr>
    <tr><th>Voorraad:</th><td>{{$wine->units}}</td></tr>
    <tr><th>Prijs:</th><td>€{{(number_format( $wine->price, 2 , "," , ".")) }}</td></tr>
    
    </table>
</div>


@endsection