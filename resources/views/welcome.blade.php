@extends('template.main')

@section('content')
    <div class="welcomeContent">
        @include('partials.welcomeHead')

        <div id="app">

            {{-- ADD TOKEN IN META HEAD --}}
            <calcul-aliment > </calcul-aliment>
        </div>

        @include('partials.welcomeBottom')
    </div>
@endsection