<template>

</template>

<script>
export default {
  name: "helper.vue",

  error(message) {
    if (message.response && message.response.status === 401) {
      window.location = '/'
      return
    }
    console.error(message)
  },
}
</script>

<style scoped>

</style>