<section id="updateMaxProt" class="container mt-5">
    <form action="/update-max/{{$edit->id}}" method="POST">
      @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Votre nouvelle dose maximale de protéines : </label>
          <input type="number" name="max_proteins" value="{{$edit->max_proteins}}" class="form-control">
        </div>
        <button type="submit" class="btn">Enregistrer</button>
    </form>
</section>
