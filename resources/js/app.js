require('./bootstrap');

import { createApp } from 'vue';
// import Token from './components/CSRFTokenInput.vue';
import Calcul from './components/WelcomeCalcul.vue';
import Repertory from './components/RepertoryList.vue';

// import VueRouter from 'vue-router'
import VueAxios from 'vue-axios';
import axios from 'axios';

// createApp(Token).component('csrf-token-input', Token).mount('#token');
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
