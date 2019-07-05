@extends('layouts.mainlayout')

@section('rightcontent')

<h4>U heeft in uw winkelmandje:</h4>

<div class="pl-3">
            <table class="table table-sm table-dark">
            <th>Merk</th><th>Naam</th><th>Prijs</th>
            @foreach($wines as $wine)
            <tr><td>{{$wine->brand}}</td><td>{{$wine->name}}</td><td>€{{(number_format( $wine->price, 2 , "," , ".")) }}</td></tr>
            @endforeach
            </table>
        </div>
@endsection