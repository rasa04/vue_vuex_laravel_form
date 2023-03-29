<template>
    <div class="h-screen w-screen text-center grid place-items-center">
        <div class="grid grid-flow-row" id="form">
            <input type="text" id="name" name="name" v-model="name" placeholder="name" class="border-2 m-1 rounded-lg p-1">
            <input type="text" id="form" name="form" v-model="form" placeholder="form" class="border-2 m-1 rounded-lg p-1">
            <input type="submit" @click.prevent="save" id="save"
            class="mt-1 bg-cyan-100 rounded-lg p-1 hover:bg-cyan-300 transition duration-500"
            >
        </div>
        <RouterLink class="text-xl hover:bg-cyan-300 hover:text-white transition duration-200 m-1 p-1 rounded-lg bg-slate-400" 
        :to="{name: 'home'}"
        >Home</RouterLink>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            name: '',
            form: ''
        }
    },

    methods: {
        save() {
            let data = {
                "name": this.name,
                "form": this.form
            }
            axios.post('http://127.0.0.1:8000/api/form', data)
            .then(res => {
                this.$store.commit('save', {
                    "name": res.data.name,
                    "form": res.data.form
                })
                this.$router.push({name: 'home'})
            })
        }
    }
}
</script>

<style>

</style>
