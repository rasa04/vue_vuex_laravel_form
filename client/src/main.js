import { createApp } from 'vue'
import { Forms } from "./stores/forms";
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

import './assets/output.css'

const app = createApp(App)

// app.use(createPinia())
app.use(Forms)
app.use(router)

app.mount('#app')
