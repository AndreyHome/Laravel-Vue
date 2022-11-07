<template>
  <div class="text-center mt-2">
    <h3>Authenticate by <b>Laravel</b></h3>
    <h3>Frontend by <b>Vue 3</b> + Bootstrap css</h3>
    <h3>On Vite</h3>
    <button class="btn btn-primary" type="button" @click="loadData">Load data from server</button>
  </div>
</template>

<script setup>
import {ref, onBeforeMount} from "vue";
import axios from "axios";
import helper from '../src/components/helper.vue';


const loadData = async () => {

  await axios.get('api/loadData')
      .then(response => {
        console.log(response.data)
      }).catch(error => helper.error(error));

}

onBeforeMount(() => {

});

</script>

<style scoped>

</style>
