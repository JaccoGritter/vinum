@extends('layouts.mainlayout')

@section('rightcontent')
<br><br>
<h4>U moet ingelogd zijn voor toegang tot het winkelmandje</h4>

<a href="/home" class="btn btn-primary" role="button">Login</a>
<a href="/" class="btn btn-primary" role="button">Verder winkelen</a>
@endsection('rightcontent')