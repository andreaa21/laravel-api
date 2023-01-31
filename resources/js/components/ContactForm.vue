<script>

import axios from 'axios';
import {baseUrl} from '../data/data';

export default {
    name: 'ContactForm',
    data(){
        return{
            name: '',
            email: '',
            message: '',
            errors: {},
            loading: false,
            sent: false
        }
    },
    methods:{
        sendForm(){
            this.loading = true;
            this.sent = true;
            const data = {
                name: this.name,
                email: this.email,
                message: this.message
            }

            axios.post(`${baseUrl}contacts`, data)
                .then(result =>{
                    if(!result.data.success){
                        this.loading = false;
                        this.sent = false;
                        this.errors = result.data.errors;
                    }else{
                        this.name = '';
                        this.email = '';
                        this.message = '';
                        this.errors = {};
                    }
                    console.log(result.data);
                })
        }
    }
}
</script>


<template>
  <form @submit.prevent="sendForm()" v-if="!sent">
    <div>
        <input :class="{'is-invalid' : errors.name}" v-model.trim="name" type="text" placeholder="Inserisci il tuo nome">
        <p v-for="(error, index) in errors.name" :key="'name'+index" class="error">{{ error }}</p>
    </div>
    <div>
        <input :class="{'is-invalid' : errors.email}" v-model.trim="email" type="text" placeholder="Inserisci la tua email">
        <p v-for="(error, index) in errors.name" :key="'email'+index" class="error">{{ error }}</p> 
    </div>
    <div>
        <textarea :class="{'is-invalid' : errors.message}" v-model.trim="message" name="message"></textarea>
        <p v-for="(error, index) in errors.name" :key="'message'+index" class="error">{{ error }}</p>
    </div>

    <button type="submit">Invia</button>
  </form>
  <div v-else>
    <p>Messaggio Inviato correttamente</p>
  </div>
</template>



<style lang="scss" scoped>
    textarea{
        width: 100%;
        height: 300px;
        margin: 1rem 0 .5rem 0;
    }
    input{
        width: 30%;
        margin: .2rem 0;
        border: none;
        height: 30px;
        text-indent: 10px;
        border-radius: 5px;
    }
    button{
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 5px;
        margin-top: 1rem;
    }
    .is-invalid{
        border: 1px solid red;
    }
    .error{
        font-size: .9rem;
        color: red;
    }
</style>