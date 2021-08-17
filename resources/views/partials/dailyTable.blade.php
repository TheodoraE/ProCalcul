<div class="container mt-5">
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
                    <th scope="row">{{$dailyUser->aliments->name}}</th>
                    <td>{{$dailyUser->quantity}}</td>
                    <td>{{$dailyUser->proteins}}</td>
                    <td>{{$dailyUser->updated_at}}</td>
                    <td>
                        <form action="/destroy-one/" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>  
            @endforeach
        </tbody>
    </table>
</div>