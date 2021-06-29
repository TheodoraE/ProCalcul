<template>
    <div class="mt-5 w-25">
        <div class="form-group">
            <label for="repertory">Afficher : </label>
            <select class="form-control" id="repertory">
                <option  :class="{'active': selectedFilter == 'all'}">Tout</option>
                <option  v-for="type in types" :key="type.id" class="filter" :class="{'active': selectedFilter == type.id}">{{type.name}}</option>
            </select>
        </div>
    </div>
    <div>
        
    </div>
  
</template>


<script>
    export default {
        data() {
            return {
                aliments: [],
                types: [],
                selectedType: "all"
            };
        },
        methods: {
            getAliment() {
                this.axios
                
            },
            getType(){
                this.axios
                    .get("/types/getType/")
                    .then((res) => {
                        console.log(res);
                        this.types = res.data.resource.types;
                        console.log(this.types);
                    })
                    .catch((err) => {
                        console.log(err);
                    });
            },
            // selectFilter: function(value){
            //     this.selectedFilter = value;
            //     this.getAliment();
            // }
        },
        mounted() {
            // this.getAliment();
            this.getType();
        }
    }
</script>

<style>

</style>