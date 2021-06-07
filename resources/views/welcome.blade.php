@extends('template.main')

@section('content')
    <div class="welcomeContent">
        @include('partials.welcomeHead')
        @include('partials.welcomeMid')
        @include('partials.welcomeBottom')
    </div>
@endsection