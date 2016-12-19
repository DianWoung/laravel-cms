<template>
    <div id="app">
        <example></example>
        <uploadfile></uploadfile>

    </div>
</template>
<script>
    import example from './components/Example.vue'
    import uploadfile from './components/Uploadfile.vue'
    export default {
      el:'#app',
      data ()=>{
        return 'hello world'
    }




    }



</script>