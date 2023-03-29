<template>
    <div class="w-screen h-screen grid place-items-center">
        <div>
            <h2 class="text-lg font-bold">Forms in state:</h2>
            <div v-if="Object.keys(allForms).length < 1" class="text-lg text-gray-400 select-none">NO FORMS</div>
            <table v-if="Object.keys(allForms).length >= 1">
                <tr class="text-gray-500">
                    <th>NAME</th>
                    <th>FORM</th>
                </tr>
                <tr v-for="form in allForms" class="">
                    <td>{{ form.name }}</td>
                    <td>{{ form.form }}</td>
                </tr>
            </table>
        </div>
        <RouterLink class="text-xl hover:bg-cyan-300 hover:text-white transition duration-200 m-1 p-1 rounded-lg bg-slate-400" 
        :to="{name: 'form'}"
        >Send Form</RouterLink>
    </div>
</template>

<script>
import { RouterLink } from 'vue-router';

export default {
    computed: {
        allForms() {
            return this.$store.getters.allForms;
        }
    },
}
</script>