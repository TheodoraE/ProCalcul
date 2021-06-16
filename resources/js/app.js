import { createApp } from 'vue';
import Calcul from './components/WelcomeCalcul.vue'

import VueAxios from 'vue-axios'
import axios from 'axios'

createApp(Calcul).use(VueAxios, axios).mount("#app");
