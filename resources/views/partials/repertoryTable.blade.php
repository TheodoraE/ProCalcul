<div class="container mt-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Aliment</th>
            <th scope="col" class="text-center">Grammes de protéines pour 100g</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($repertories as $repertory)
                 <tr>
                    <th scope="row">{{$repertory->name}}</th>
                    <td class="text-center">{{$repertory->proteins_100g}}</td>
                </tr>         
            @endforeach
        </tbody>
      </table>
</div>