<div class="m-5 d-flex">

    <div class="col-2">
        <label for="">Insérez la quantité en grammes (g)</label>
        <input type="number" name="quantity">
    </div>

    <div class="col-4">
        <label for="">Sélectionnez l'aliment : </label>
        <Select></Select>
    </div>

    <div class="col-2">
        <button type="button" class="btn btn-primary">Calculer</button>
    </div>

    <div class="col-2">
        <Span>Résultat :</Span>
        <span> g</span>
    </div>

    <div class="col-2">
        <form action="">
            @csrf
            <button type="submit" class="btn btn-success">Ajouter à l'apport journalier</button>
        </form>
    </div>

</div>