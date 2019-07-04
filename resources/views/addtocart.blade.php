@extends('layouts.mainlayout')

@section('leftcontent')

<br><br>
<h4>{{ $wine->brand }} {{ $wine->name }} toegevoegd aan je winkelmandje</h4>
<br><br>

<a href="/" class="btn btn-primary" role="button">Home</a>


@endsection