@extends('template.main')

@section('content')
    <div id="repertoryHead" class="container">
        <div class="my-3">
            <h1 class="text-center my-5">Répertoire des aliments</h1>
            <h3>Voici un répertoire des aliments avec leur apport en protéines pour 100 grammes.</h3>
        </div>

        <div id="repertory">
            <Repertory> </Repertory>
        </div>
    </div>
@endsection
