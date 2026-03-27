<template>
    <div class="container">
        <form action="/dailyUser/handle" method="POST" v-on:submit.prevent="saveForm">
            <!-- CSRF token for Laravel -->
            <input type="hidden" name="_token" :value="csrf" />
            <!-- <entree /> -->
            <div class="row">
                <!-- Quantité -->
                <div class="form-group mt-4 col-lg-6">
                    <label for="quantity">Insérez la quantité en grammes (g)</label>
                    <input v-model.number="quantiteValue"
                        id="inputQtt" type="number" name="quantity" class="form-control">
                </div>

                <!-- Aliment -->
                <div class="form-group mt-4 col-lg-6">
                    <label for="name">Sélectionnez l'aliment : </label>
                    <select @change="selectAliment()"
                        id="selectName" v-model="aliment_id" class="form-control" name="aliment_id" aria-label="Séléctionnez un aliment">
                        <option value="">Sélectionner...</option>
                        <option v-for="aliment in aliments"
                                :value="aliment.id"
                                :key="aliment.id">{{aliment.name}}
                        </option>
                    </select>
                </div>
            </div>

             <!-- Bouton pour calculer -->
            <div class="calculBtn form-group my-2">
                <button @click="calculTotal()" id="btnCalcul" type="button" class="btn btn-primary">Calculer</button>
            </div>

             <!-- Résultat -->
            <div class="form-group my-4">
                <label for="proteins">Résultat : </label>
                <input id="inputResult" type="number" step="0.01" name="proteins" class="form-control" :value="valueResult" disabled>
            </div>

             <!-- Bouton pour envoyer -->
            <button type="submit" class="btn btn-success">Ajouter à l'apport journalier</button>
        </form>
    </div>
</template>

<script>


    export default {
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                aliments : "",
                aliment_id : "",

                    // Calcul
                inputQtt : "",
                quantiteValue : "",
                selectName : "",
                aliment_protein : "",
                valueResult : 0,
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
            // Choisir la quantité de nourriture
            // Sélectionner l'aliment
            selectAliment(){
                // lookup protein dose from the selected id
                const selected = this.aliments.find(a => a.id == this.aliment_id);
                this.aliment_protein = selected ? parseFloat(selected.proteinDose) : 0;
            },
            // Calcul des doses
            calculTotal(){
                this.valueResult = parseFloat((this.aliment_protein/100)*this.quantiteValue).toFixed(2);
                console.log(this.valueResult);
            },
            ///// Enregistrer l'aliment
            saveForm() {
                this.axios
                .post("/dailyUser/handle" ,
                    { aliment_id : this.aliment_id, quantity : this.quantiteValue, proteins : this.valueResult },
                    { headers: { 'X-CSRF-TOKEN': this.csrf } }
                )

                .then((res) => {
                    console.log(res);
                    console.log('then');
                    window.location.href = '/';
                })
                .catch((err) => {
                    alert('erreur formulaire');
                    console.log(err);
                });
            }
        },
        mounted() {
            this.getResources();
            console.log('Component mounted.');
        }
    }
</script>

<style>
    option{
        font-size: 15px;
    }
</style>
