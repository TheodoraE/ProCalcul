<template>
    <div class="mt-5 w-25">
        <div class="form-group">
            <label for="repertory">Afficher : </label>
            <select v-model="selectedFilter" @change="getAliment()" class="form-control" id="repertory">
                <option value="all">Tout</option>
                <option v-for="type in types" :key="type.id" :value="type.id">{{type.type}}</option>
            </select>
        </div>
    </div>

    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr class="headers">
                    <th scope="col">Aliment</th>
                    <th scope="col" class="text-center">Grammes de protéines pour 100g</th>
                </tr>
            </thead>
            <tbody v-for="aliment in aliments" :key="aliment.id">
                <tr>
                    <th scope="row">{{aliment.name}}</th>
                    <td class="text-center">{{aliment.proteinDose}} g</td>
                </tr>

            </tbody>
        </table>
    </div>

    <!-- Pagination  -->

</template>


<script>
    export default {
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                aliments: [],
                types: [],
                selectedFilter: "all"
            };
        },
        methods: {
            getAliment() {
                this.axios
                    .get("/aliments/getAliment/"+this.selectedFilter)
                    .then((res) => {
                        // console.log(res);
                        this.aliments = res.data.resource.aliments;
                    })
                    .catch((err) => {
                        console.log(err);
                    });
            },
            getType(){
                this.axios
                    .get("/types/getType/")
                    .then((res) => {
                        // console.log(res);
                        this.types = res.data.resource.types;
                    })
                    .catch((err) => {
                        console.log(err);
                    });
            }
        },
        mounted() {
            this.getAliment();
            this.getType();
        }
    }
</script>

<style>

</style>
