@extends('layouts.mainlayout')

@section('leftcontent')
<br><br>

@if (count($wine->reviews) > 0)

<h4>Reviews voor {{ $wine->brand }} {{ $wine->name }}</h4>
<br>

@foreach($wine->reviews->reverse() as $review)

<p><b>{{ $review->screen_name }}</b> gaf de wijn

    @for ($i = 0; $i < $review->stars; $i++)
        <i class="fas fa-star"></i>
    @endfor

    @for ($i = $review->stars; $i < 5 ; $i++)
        <i class="far fa-star"></i>
    @endfor

</p>
<p>{{ $review->comment}}</p>
<p>----------------------------</p>
@endforeach

@else <br><br><br><h4>Er zijn nog geen reviews voor deze wijn</h4>

@endif

@endsection

@section('rightcontent')
<br>
<h4>{{ $wine->brand }} {{ $wine->name }}</h4>
<br>
<img src=" {{ $wine->picture() }} ">
<br>
<div class="mt-3 pl-3">
    <table align="center" class="table table-sm table-dark col-md-8">
        <tr>
            <th>Type:</th>
            <td>{{$wine->variety}}</td>
        </tr>
        <tr>
            <th>Druif:</th>
            <td>{{$wine->grapes}}</td>
        </tr>
        <tr>
            <th>Herkomst:</th>
            <td>{{$wine->country}}</td>
        </tr>
        <tr>
            <th>Alcohol:</th>
            <td>{{$wine->alcperc}}%</td>
        </tr>
        <tr>
            <th>Omschrijving:</th>
            <td>{{$wine->description}}</td>
        </tr>
        <tr>
            <th>Voorraad:</th>
            <td>{{$wine->units}}</td>
        </tr>
        <tr>
            <th>Prijs:</th>
            <td>€{{(number_format( $wine->price, 2 , "," , ".")) }}</td>
        </tr>

    </table>
</div>

<div>

    <a href="{{ route('addtocart', $wine->id) }}" class="btn btn-primary" role="button">In Mandje</a>
    @if ( Auth::check() )
    <a href="{{ route('createreview', $wine->id) }}" class="btn btn-primary" role="button">Schrijf Review</a>
    @endif
    <a href="/" class="btn btn-primary" role="button">Home</a>
</div>

@endsection