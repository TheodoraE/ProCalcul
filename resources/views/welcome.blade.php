@extends('template.main')

@section('content')
    <div class="welcomeContent">

        <div id="app">
            <calcul-aliment > </calcul-aliment>
        </div>

        @include('partials.welcomeBottom')
    </div>
@endsection
