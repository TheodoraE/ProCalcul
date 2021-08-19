require('./bootstrap');

import { createApp } from 'vue';
import Calcul from './components/WelcomeCalcul.vue';
import Repertory from './components/RepertoryList.vue';

import VueAxios from 'vue-axios';
import axios from 'axios';


// Ajouter condition d'affichage pour les différentes pages
// Current url
if(window.location.pathname == "/"){
// createApp(Calcul).use(VueAxios, axios).mount("#app");
        let app = createApp(Calcul)
        app.component('calcul-aliment', Calcul)
        app.use(VueAxios, axios).mount('#app')
} else if(window.location.pathname == "/repertory"){
    createApp(Repertory).use(VueAxios, axios).mount("#repertory");
}
