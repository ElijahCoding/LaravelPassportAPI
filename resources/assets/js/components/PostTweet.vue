<template>
  <form action="#">
    <div class="form-group">
      <textarea class="form-control" cols="30" rows="2" v-model="body"></textarea>
      <button class="btn btn-default" type="submit">Post</button>
    </div>
  </form>
</template>

<script>
  export default {
    data () {
      return {
        body: null
      }
    }
  }
</script>
