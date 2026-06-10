@extends('template.main')

@section('content')
    <div id="repertoryHead" class="container">
        <div class="mt-3">
            <h3 >Répertoire des aliments</h3>
            <h5>Voici un répertoire des aliments avec leur apport en protéines pour 100 grammes.</h5>
        </div>

        <div id="repertory">
            <Repertory> </Repertory>
        </div>
    </div>
@endsection
