<script>
export default {
    name: 'Header'
}
</script>


<template>
  <header>
    <div class="logo">Boolpress</div>
    <ul>
        <li><router-link :to="{ name:'home' }">Home</router-link></li>
        <li><router-link :to="{ name:'about' }">Chi Siamo</router-link></li>
        <li><router-link :to="{ name:'contacts' }">Contatti</router-link></li>

    </ul>
  </header>
</template>



<style lang="scss" scoped>
header{
    display: flex;
    .logo{
        padding: 1rem;
        text-transform: uppercase;
    }
}
    ul{
        list-style: none;
        display: flex;
        li{
            padding: 1rem;
            a{
                text-decoration: none;
                color: white;
                transition: all .3s;
                font-size: .9rem;
                &:hover,
                &.active{
                    color: rgb(127, 190, 107);
                }
            }
        }
    }
</style>