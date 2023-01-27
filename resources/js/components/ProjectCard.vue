<script>
export default {
    name: 'ProjectCard',
    props:{
        project: Object
    }
}
</script>

<template>
    <div class="card">
        <h3>{{ project.name }}</h3>
        <h5 class="client">{{ project.client_name }}</h5>
        <div class="card-text">
            <div class="badges">

                <span class="category">{{ project.category.name }}</span>

                <div class="technologies">
                <ul
                v-for="item in project.technologies" :key="item.id"
                > 
                <li class="technology">{{ item.name}}</li>
                </ul>
                </div>
                
            </div>
            <p>{{ project.summary }}</p>

        </div>
    </div>
</template>

<style lang="scss" scoped>
    .card{
        padding: 1rem;
        // background-color: rgb(209, 209, 209);
        border: 2px solid rgb(0, 0, 0);
        border-radius: 20px;
        width: 300px;
        height: 400px;
        overflow: hidden;
        margin: 1rem;
        h3{
            text-transform: uppercase;
        }
        .client{
            margin: 1rem 0;
        }
        .badges{
            margin: 20px 0;
            display: flex;
            justify-content: space-between;
            .technologies{
                display: flex;
            }
            .category{
            color: white;
            background-color: rgb(116, 128, 184);
            padding: .5rem;
            border-radius: 10px;
            }
            ul{
                list-style: none;
                margin-top: 10px;
                display: flex;
                .technology{
                    padding: .5rem;
                    border-radius: 10px;
                    color: white;
                    background-color: rgb(66, 141, 91);
                    font-size: .7rem;
                    margin: 0 5px;
                }
            }
        }
    }
</style>

