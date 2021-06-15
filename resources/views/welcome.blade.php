@extends('template.main')

@section('content')
    <div class="welcomeContent">
        @include('partials.welcomeHead')

        <div id="app">
            <Calcul token="{{csrf_token()}}"></Calcul>
        </div>

        {{-- @include('partials.welcomeMid') --}}
        @include('partials.welcomeBottom')
    </div>
@endsection