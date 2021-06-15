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
            {{-- @foreach ($users as $user) --}}
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <form action="/destroy-one/" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>  
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>