<script>

export default {
    name: 'ContactForm'
}
</script>


<template>
  <form>
    <div>
        <input type="text" name="name" placeholder="Inserisci il tuo nome">
    </div>
    <div>
        <input type="text" name="email" placeholder="Inserisci la tua email">
    </div>
    <div>
        <textarea name="message"></textarea>
    </div>

    <button type="submit">Invia</button>
  </form>
</template>



<style lang="scss" scoped>
    textarea{
        width: 100%;
        height: 300px;
        margin: 1rem 0;
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
    }
</style>