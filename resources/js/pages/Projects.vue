<script>

import axios from 'axios';
import ProjectCard from '../components/ProjectCard.vue';


export default {
  name: 'Projects',
  components:{
    ProjectCard
  },
  data(){
    return{
      baseUrl: 'http://127.0.0.1:8000/api/',
      projects: []
    }
  },
  methods:{
    getApi(){
      axios.get(this.baseUrl + 'projects')
          .then(result => {
            this.projects = result.data.projects;
            console.log(this.projects);
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

<div class="card-container">
    <ProjectCard
        v-for="project in projects" :key="project.id"
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