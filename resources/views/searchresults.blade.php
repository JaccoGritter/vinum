@extends('layouts.mainlayout')

@section('leftcontent')
<br><br><br>
<h4>Deze vindt u misschien ook heel erg lekker</h4>

<p>Lorem Ipsum</p>

@endsection


@section('rightcontent')

@if ($wines->isEmpty())
    <br><br>
    <h5>Er zijn helaas geen wijnen gevonden met deze zoekcriteria</h5>
    <br><br>
    <div>
        <a href="/" class="btn btn-primary" role="button">Home</a>
    </div>

@else

<br>
<div  class="text-left">
<h3>We hebben voor u gevonden:</h3>
<p>klik op de afbeelding voor meer info</p>
</div>

@foreach ($wines as $wine)
    <div class="searchresults">
        <div>
            <a href="{{ route('show', $wine->id) }}"><img src="{{$wine->picture()}}" alt="wijn"></a>
        </div>
        <div class="pl-3">
            <table class="table table-sm table-dark">
            <tr><th>Merk:</th><td>{{$wine->brand}}</td></tr>
            <tr><th>Naam:</th><td>{{$wine->name}}</td></tr>
            <tr><th>Type:</th><td>{{$wine->variety}}</td></tr>
            <tr><th>Druif:</th><td>{{$wine->grapes}}</td></tr>
            <tr><th>Herkomst:</th><td>{{$wine->country}}</td></tr>
            <tr><th>Prijs:</th><td>€{{(number_format( $wine->price, 2 , "," , ".")) }}</td></tr>
            </table>
        </div>
        
    </div>
    <br>
@endforeach

{{ $wines->links() }}

<div  class="text-left">
<a href="/" class="btn btn-primary" role="button">Home</a>
</div>

@endif


<br>

@endsection


