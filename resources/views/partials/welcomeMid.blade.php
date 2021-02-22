<div class="container">
    <form action="/add-daily" method="POST">
        @csrf

        {{-- Quantité --}}
        <div class="form-group my-5">
            <label for="quantity">Insérez la quantité en grammes (g)</label>
            <input id="inputQtt" type="number" name="quantity" class="form-control">
        </div>

        {{-- Aliment --}}
        <div class="form-group my-5">
            <label for="name">Sélectionnez l'aliment : </label>
            <select id="selectName" class="form-control" name="name">
                @foreach ($repertories as $repertory)
                    <option value="{{$repertory->proteins_100g}}">{{$repertory->name. ' ' .$repertory->proteins_100g}}</option>
                @endforeach
            </select>
        </div>

        {{-- Bouton pour calculer --}}
        <div class="form-group my-5">
            <button id="btnCalcul" type="button" class="btn btn-primary">Calculer</button>
        </div>

        {{-- Résultat --}}
        <div class="form-group my-5">
            <label for="proteins">Résultat : </label>
            <input id="inputResult" type="number" step="0.01" name="proteins" class="form-control ">
        </div>

        {{-- Bouton pour envoyer --}}
        <button type="submit" class="btn btn-success">Ajouter à l'apport journalier</button>
    </form>
</div>