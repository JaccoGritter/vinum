@extends('layouts.mainlayout')

@section('leftcontent')
<br><br>
<h4>Reviews voor {{ $wine->brand }} {{ $wine->name }}</h4>

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

<div>
<a href="/" class="btn btn-primary" role="button">Home</a>
<a href="{{ route('addtocart', $wine->id) }}" class="btn btn-primary" role="button">In winkelmandje</a>
</div>

@endsection