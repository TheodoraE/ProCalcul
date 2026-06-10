@extends('template.main')

@section('content')
    <div class="welcomeContent">

        <div id="app">
            <calcul-aliment > </calcul-aliment>
        </div>

        <div id="welcomeDescription">
            <h4>Cette calculatrice vous permets de calculer l'apport en protéines selon votre consommation d'aliments.</h4>
            <h5 class=""><a href="/">Connectez-vous</a> pour l’ajouter à votre consommation journalière.</h5>
            {{-- <h5 class="">Ajoutez chaque aliment au fur et à mesure de votre consommation sur la journée pour connaître le résultat journalier</h5> --}}
        </div>

        {{-- SI CONNECTE --}}
        {{-- <div id="welcomeBottom">
            <h3>Vous êtes actuellement à <span id="dailyProt"> --}}

                {{-- <input type="number"> --}}
                {{-- <b>
                            {{$dailyUser->sum('proteins')}}
                </b>
                </span>g de protéines sur la journée</h3>
            <h3 class="mt-3">Vous pouvez encore consommer <span> <b>{{$maxProtein->maxProtein - $dailyUser->sum('proteins')}}</b> </span>g de protéines aujourd'hui</h3>
        </div> --}}
            </div>
@endsection
