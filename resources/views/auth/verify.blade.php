@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bevestig uw emailadres') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Een nieuwe verificatielink is verstuurd naar uw emailadres.') }}
                        </div>
                    @endif

                    {{ __('Controleer uw email voor een verificatielink oordat u verder gaat.') }}
                    {{ __('Als u geen email ontvangen heeft') }}, <a href="{{ route('verification.resend') }}">{{ __('klik dan hier om het opnieuw te proberen.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
