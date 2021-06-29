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
                <td class="text-center">{{$repertory->proteinDose}}</td>
            </tr>         
          @endforeach
          {{-- Faire un Switch
            Essayer de changer l'url avec l'elément que j'ai séléctionner pour pouvoir trigger la value --}}
          {{-- @switch($select.value)
              @case("Tous")
                  @foreach ($repertories as $repertory)
                    <tr>
                        <th scope="row">{{$repertory->name}}</th>
                        <td class="text-center">{{$repertory->proteins_100g}}</td>
                    </tr>         
                  @endforeach
                  @break
              @case(2)
                  
                  @break
              @default
                  
          @endswitch --}}
          {{-- @if ( == "Tous") --}}
            {{-- Tous --}}
            {{-- @foreach ($repertories as $repertory)
                 <tr>
                    <th scope="row">{{$repertory->name}}</th>
                    <td class="text-center">{{$repertory->proteins_100g}}</td>
                </tr>         
            @endforeach --}}

          {{-- @else if()
            {{-- Légumes --}}
            {{-- @foreach ($vegetables as $vegetable)
              <tr>
                <th scope="row">{{$vegetable->name}}</th>
                <td class="text-center">{{$vegetable->proteins_100g}}</td>
              </tr>         
            @endforeach  --}}

          {{-- @else if()
            {{-- Fruits --}}
            {{-- @foreach ($fruits as $fruit)
              <tr>
                <th scope="row">{{$fruit->name}}</th>
                <td class="text-center">{{$fruit->proteins_100g}}</td>
              </tr>         
            @endforeach  --}}

          {{-- @else if()
            {{-- Jus de Légumes --}}
            {{-- @foreach ($juiceVegetables as $juiceVegetable)
              <tr>
                <th scope="row">{{$juiceVegetable->name}}</th>
                <td class="text-center">{{$juiceVegetable->proteins_100g}}</td>
              </tr>         
            @endforeach  --}}

          {{-- @else if()
            {{-- Jus de Fruit --}}
            {{-- @foreach ($juiceFruits as $juiceFruit)
              <tr>
                <th scope="row">{{$juiceFruit->name}}</th>
                <td class="text-center">{{$juiceFruit->proteins_100g}}</td>
              </tr>         
            @endforeach  --}}

          {{-- @else if()
            {{-- Divers --}}
            {{-- @foreach ($divers as $diver)
              <tr>
                <th scope="row">{{$diver->name}}</th>
                <td class="text-center">{{$diver->proteins_100g}}</td>
              </tr>         
            @endforeach  --}}

          {{-- @else if()
            {{-- Produits Spéciaux --}}
            {{-- @foreach ($specialProduct as $diver)
              <tr>
                <th scope="row">{{$specialProduct->name}}</th>
                <td class="text-center">{{$specialProduct->proteins_100g}}</td>
              </tr>         
            @endforeach  --}}

          {{-- @else if()
            {{-- Repas maison --}}
            {{-- @foreach ($homeFoods as $homeFood)
              <tr>
                <th scope="row">{{$homeFood->name}}</th>
                <td class="text-center">{{$homeFood->proteins_100g}}</td>
              </tr>         
            @endforeach  --}}


          {{-- @endif --}}

        </tbody>
      </table>
</div>