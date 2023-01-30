<script>

import axios from 'axios';
import ProjectCard from '../components/ProjectCard.vue';
import FormSearch from '../components/FormSearch.vue';
import { store } from '../data/store';

export default {
  name: 'Projects',
  components:{
    ProjectCard,
    FormSearch
  },
  data(){
    return{
      baseUrl: 'http://127.0.0.1:8000/api/',
      store
    }
  },
  methods:{
    getApi(){
      axios.get(this.baseUrl + 'projects')
          .then(result => {
            store.projects = result.data.projects;
            console.log(store.projects);
          })
    }
  },
  mounted(){
    this.getApi();
  }
}
</script>

<template>
<h1>Progetti</h1>

<FormSearch />

<div class="card-container">
    <ProjectCard
        v-for="project in store.projects" :key="project.id"
        :project = "project"
      />
</div>
</template>



<style lang="scss" scoped>

    .card-container{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }
</style>