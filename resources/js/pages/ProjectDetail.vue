<script>

import axios from 'axios';
import {baseUrl} from '../data/data';


export default {
    name: 'ProjectDetail',
    data(){
        return{
            project: []
        }
    },
    methods:{
        getApi(){
            axios.get(baseUrl + 'project/' + this.$route.params.slug)
                .then((result) => { 
                    this.project = result.data;
                    console.log(this.project);
            })
        }
    },
    mounted(){
        this.getApi();
    }
}
</script>

<template>

     <h1>{{ project.name }}</h1> 

    <p>{{ project.client_name }}</p>
    <div v-html="project.summary"></div> 
</template>



<style>

</style>