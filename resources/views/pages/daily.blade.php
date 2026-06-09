@extends('template.main')

@section('content')
    <div id="dailyHead" class="container">
        <div class="dailyTitle my-5">
            <h1 class="text-center">Apport journalier</h1>
        </div>
        <div>
            <h3>Votre barème de protéines maximales : <span> <b> <a href="/edit-max/{{$user->id}}">{{$user.0->maxProtein}}</a></b> </span> grammes par jour</h3>
        </div>
        <div class="dailyActions d-flex justify-content-around w-25 my-4">
            <p>Remettre la table à 0 : </p>
            <form action="/destroy-all" method="POST">
                @csrf
                <button id="EmptyBtn" type="submit" class="btn btn-danger">Vider la table</button>
            </form>
        </div>
    </div>
    <div id="dailyTable" class="container mt-5">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Aliment</th>
                <th scope="col">Quantité</th>
                <th scope="col">Protéines</th>
                <th scope="col">Consommé à</th>
                <th scope="col"> </th>
            </tr>
            </thead>
            <tbody>
                @foreach ($dailyUsers as $dailyUser)
                    <tr>
                        <th scope="row">{{$dailyUser->aliment->name}}</th>
                        <td>{{$dailyUser->quantity}} g</td>
                        <td>{{$dailyUser->proteins}} g</td>
                        <td>{{$dailyUser->updated_at}}</td>
                        <td>
                            <form action="/destroy-one/{{$dailyUser->id}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
