<template>
    <div class="container">
        <form action="/add-daily" method="POST">

            <!-- Quantité -->
            <div class="form-group my-5">
                <label for="quantity">Insérez la quantité en grammes (g)</label>
                <input id="inputQtt" type="number" name="quantity" class="form-control">
            </div>

             <!-- Aliment -->
            <div class="form-group my-5">
                <label for="name">Sélectionnez l'aliment : </label>
                <select v-model="aliment_id" class="form-control" name="aliment_id" aria-label="Séléctionnez un aliment">
                    <option>Sélectionner...</option>
                    <option v-for="aliment in aliments"
                            :value="aliment.id"
                            :key="aliment.id">{{aliment.name}}
                    </option>
                </select>
            </div>

             <!-- Bouton pour calculer -->
            <div class="form-group my-5">
                <button id="btnCalcul" type="button" class="btn btn-primary">Calculer</button>
            </div>

             <!-- Résultat -->
            <div class="form-group my-5">
                <label for="proteins">Résultat : </label>
                <input id="inputResult" type="number" step="0.01" name="proteins" class="form-control" disabled>
            </div>

             <!-- Bouton pour envoyer -->
            <button type="submit" class="btn btn-success">Ajouter à l'apport journalier</button>
        </form>
    </div>
</template>

<script>
    export default {
        props: [
            'token',
        ],
        data() {
            return {
                aliments : "",
                aliment_id : "",
            };
        },
        methods: {
            getResources(){
                this.axios
                    .get("/aliments/getResources")
                    .then((res) => {
                        console.log(res);
                        this.aliments = res.data.resource.aliments;
                    })
                    .catch((err) => {
                        console.log(err);
                    });
            },
        },
        mounted() {
            this.getResources();
            console.log('Component mounted.')
        }
    }
</script>

<style>
    option{
        font-size: 15px;
    }
</style>