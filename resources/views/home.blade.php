@extends('layouts.app')

@section('content')
<div class="container authcontainer mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welkom bij Vinum</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>U bent ingelogd! </h5>
                    <h4><a href="/">Ga verder</a></h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
