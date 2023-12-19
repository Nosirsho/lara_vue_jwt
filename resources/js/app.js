import './bootstrap';
import { createApp } from 'vue';
import router from "./router.js";
import Index from './components/Index.vue';
import Login from "./components/User/Login.vue";
import Registration from "./components/User/Registration.vue";

const app = createApp({
    components:{
        Index,
        Login,
        Registration
    }
});
app.use(router);
app.mount('#app');
