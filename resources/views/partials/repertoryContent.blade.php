<div class="container">
    <div class="my-3">
        <h1 class="text-center my-5">Répertoire des aliments</h1>
        <h3>Voici un repertoire des aliments avec leur apport en protéines pour 100 grammes.</h3>
    </div>
    <div class=" mt-5 w-25">
        <form action="/list-show">
            <div class="form-group">
                <label for="repertory">Afficher : </label>
                <select class="form-control" id="repertory">
                  <option value="Tous">Tous</option>
                  <option value="Légumes">Légumes</option>
                  <option value="Fruits">Fruits</option>
                  <option value="JusDeLégumes">Jus de légumes</option>
                  <option value="JusDeFruits">Jus de fruits</option>
                  <option value="Divers">Divers</option>
                  <option value="ProduitSpéciaux">Produits spéciaux</option>
                  <option value="PlatMaison">Plats maison</option>
                </select>
            </div>
        </form>

        {{-- Test --}}
        {{-- <form action="/list-show">
            <label for="repertory">Afficher : </label>
            <select class="form-control" id="repertory" name="repertory">
                <option value="tous">Tous</option>
                <option value="légumes">Légumes</option>
                <option value="fruits">Fruits</option>
                <option value="jus de légumes">Jus de légumes</option>
                <option value="jus de fruits">Jus de fruits</option>
                <option value="divers">Divers</option>
                <option value="produits spéciaux">Produits spéciaux</option>
                <option value="plats maison">Plats maison</option>
            </select>
            <input type="submit" value="Submit">
        </form> --}}

        {{-- Recherche par nom --}}
        {{-- <div>
            <label for="">Rechercher : </label>
            <input type="text">
        </div> --}}

    </div>
</div>