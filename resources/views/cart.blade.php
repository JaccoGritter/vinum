@extends('layouts.mainlayout')

@section('rightcontent')

<br><br>

<h4>U heeft in uw winkelmandje:</h4>

<div class="pl-3">
            <table class="table table-sm table-dark">
            <th>Merk</th><th>Naam</th><th>Prijs</th><th>Aantal</th>
            @foreach($wines as $wine)
            <tr><td>{{$wine->brand}}</td><td>{{$wine->name}}</td><td>€{{ number_format($wine->pivot->myprice, 2) }}</td><td>{{$wine->pivot->quantity}}</td><td><a href="{{route('addone', $wine->orders->first()->id)}}"><i class="fas fa-plus fa-xs add"></i></a></td><td><a href="{{route('decreaseone', $wine->orders->first()->id)}}"><i class="fas fa-minus fa-xs add"></i></a></td></tr>
            @endforeach
            <tr><td><td><td><td></td></td></td></td></tr>
            <tr><td></td><td></td><td><b>€{{ number_format(Auth::user()->getOrderValue(),2)}}</b></td><td><b>{{Auth::user()->getCartQuantity()}}</b></td></tr>
            </table>
        </div>

        <a href="{{ route('pay') }}" class="btn btn-primary" role="button">Betalen</a>
        <a href="/" class="btn btn-primary" role="button">Verder winkelen</a>
@endsection