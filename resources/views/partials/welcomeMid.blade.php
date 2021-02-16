<div class="m-5 d-flex align-items-center">

    <div class="col-2 my-5">
        <label for="">Insérez la quantité en grammes (g)</label>
        <input type="number" name="quantity">
    </div>

    <div class="form-group col-4 my-5">
        <label for="exampleFormControlSelect1">Sélectionnez l'aliment : </label>
        <select class="form-control" id="exampleFormControlSelect1">
            @foreach ($repertories as $repertory)
                <option>{{$repertory->name}}</option>
            @endforeach
        </select>
      </div>

    <div class="col-2 my-5">
        <button type="button" class="btn btn-primary">Calculer</button>
    </div>

    <div class="col-2 my-5">
        <Span>Résultat :</Span>
        <span> <b class="text-danger">X</b> g</span>
    </div>

    <div class="col-2 my-5">
        <form action="">
            @csrf
            <button type="submit" class="btn btn-success">Ajouter à l'apport journalier</button>
        </form>
    </div>

</div>