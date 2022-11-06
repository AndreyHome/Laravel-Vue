<template>
  <div class="text-center mt-2">
    <h3>Authenticate by <b>Laravel</b></h3>
    <h3>Frontend by <b>Vue 3</b> + Bootstrap css</h3>
    <h3>On Vite</h3>
    <button class="btn btn-primary" type="button" @click="count++">I'm vue {{ count }}</button>
  </div>
</template>

<script setup>
import {ref} from "vue";

const count = ref(0)

</script>

<style scoped>

</style>
