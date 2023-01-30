<script>

import axios from 'axios';
import { baseUrl } from '../data/data';
import { store } from '../data/store';

export default {
    name: 'FormSearch',
    data(){
        return{
            toSearch: '',
            store
        }
    },
    methods:{
        getApi(){
            const data = new FormData();
            data.append('toSearch', this.toSearch);

            axios.post(baseUrl + 'projects/search', data)
                .then(result => {
                    this.toSearch = '';
                    store.projects = result.data.projects;
                    console.log(result.data.projects);
                })
        }
    }
}
</script>


<template>
    <div class="input-area">
        <input v-model.trim="toSearch" @keyup.enter="getApi" type="text" placeholder="Cerca">

        <button @click="getApi">Invia</button>
    </div>
</template>



<style lang="scss" scoped>
.input-area{
    padding: 2rem 0;
    text-align: center;
    input{
        width: 100%;
        margin-bottom: 1rem;
        padding: .5rem;
        border: none;
        border-radius: 10px;
    }
    button{
        padding: .3rem .7rem;
        border-radius: 5px;
        background-color: white;
        border: none;
        cursor: pointer;
    }
}
</style>