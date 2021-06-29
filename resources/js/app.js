import { createApp } from 'vue';
import Calcul from './components/WelcomeCalcul.vue';
import Repertory from './components/RepertoryList.vue';

import VueAxios from 'vue-axios';
import axios from 'axios';

createApp(Calcul).use(VueAxios, axios).mount("#app");
createApp(Repertory).use(VueAxios, axios).mount("#repertory");
