<template>
    <div class="container">
        <form action="/" method="POST" v-on:submit.prevent="saveForm">
            <Token />
            <!-- crsf_token -->
            <!-- <input type="hidden" name="_token" :value="csrf"> -->
            <div class="row">
                <!-- Quantité -->
                <div class="form-group mt-4 col-lg-6">
                    <label for="quantity">Insérez la quantité en grammes (g)</label>
                    <input @change="qttAliment()"
                        id="inputQtt" type="number" name="quantity" class="form-control">
                </div>

                <!-- Aliment -->
                <div class="form-group mt-4 col-lg-6">
                    <label for="name">Sélectionnez l'aliment : </label>
                    <select @change="selectAliment()"
                        id="selectName" v-model="aliment_id" class="form-control" name="aliment_id" aria-label="Séléctionnez un aliment">
                        <option>Sélectionner...</option>
                        <option v-for="aliment in aliments"
                                :value="aliment.proteinDose"
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
    import Token from './CSRFTokenInput'

    export default {
        props: [
            // Les props ne passent pas
            'token'
        ],
        name: 'WelcomeCalcul',
        components: {
            Token
        },
        data() {
            return {
                // _token: csrf_token,
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
            qttAliment(){
                this.quantiteValue = parseFloat(inputQtt.value);
                // console.log(this.quantiteValue);
            },
            // Sélectionner l'aliment
            selectAliment(){
                // Choisir l'aliment par l'apport en protéines
                this.aliment_protein = parseFloat(selectName.value);
                // console.log(this.aliment_protein);
            },
            // Calcul des doses
            calculTotal(){
                this.valueResult = parseFloat((this.aliment_protein/100)*this.quantiteValue).toFixed(2);
                console.log(this.valueResult);
            },
            ///// Enregistrer l'aliment
            saveForm() {
                this.axios
                .post("/dailyUser/handle" , { aliment_id : this.aliment_protein, quantity : this.quantiteValue, proteins : this.valueResult})

                .then((res) => {
                    console.log(res);
                    console.log('then');
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