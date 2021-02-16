<div class="m-5">
    <div class="my-5">
        <h1 class="text-center">Apport journalier</h1>
    </div>
    <div>
        <h4>Votre barème de protéines maximales : <span> <b class="text-danger">X</b> </span> grammes par jour</h4>
    </div>
    <div class="d-flex justify-content-around w-25 my-4">
        <p>Remettre la table à 0 : </p>
        <form action="" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Vider la table</button>
        </form>
    </div>
</div>