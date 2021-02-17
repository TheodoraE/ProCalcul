<section class="container mt-5">
    <form action="/update-max/{{$edit->id}}" method="POST">
      @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Dose maximale de protéines : </label>
          <input type="number" name="max_proteins" value="{{$edit->max_proteins}}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</section>