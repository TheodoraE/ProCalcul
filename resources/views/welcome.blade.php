@extends('template.main')

@section('content')
    <div class="welcomeContent">
        @include('partials.welcomeHead')

        <div id="app">
            <calcul-aliment token="{{csrf_token()}}"></calcul-aliment>
        </div>

        @include('partials.welcomeBottom')
    </div>
@endsection