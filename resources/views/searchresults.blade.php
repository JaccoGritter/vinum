@extends('layouts.mainlayout')

@section('leftcontent')
<br><br><br>
<h4>Deze vindt u misschien ook heel erg lekker</h4>

<p>Lorem Ipsum</p>

@endsection


@section('rightcontent')

@if ($wines->isEmpty())

    <h5>Er zijn geen wijnen gevonden met deze zoekcriteria</h5>

@else

<br>
<h3>We hebben voor u gevonden:</h3>

@foreach ($wines as $wine)
    <div class="searchresults">
        <div>
            <img src="{{$wine->picture()}}" alt="wijn">
        </div>
        <div class="pl-3">
            <table class="table table-dark">
            <tr><th>Merk:</th><td>{{$wine->brand}}</td></tr>
            <tr><th>Naam:</th><td>{{$wine->name}}</td></tr>
            <tr><th>Type:</th><td>{{$wine->variety}}</td></tr>
            <tr><th>Druif:</th><td>{{$wine->grapes}}</td></tr>
            <tr><th>Herkomst:</th><td>{{$wine->country}}</td></tr>
            <tr><th>Prijs:</th><td>€{{$wine->price}}</td></tr>
            </table>
        </div>
        
    </div>
    <br>
@endforeach

@endif

@endsection


