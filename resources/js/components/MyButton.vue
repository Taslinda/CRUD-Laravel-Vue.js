<template>
  <button type="submit" class="btn btn-primary">{{nilai}}</button>
</template>

<script>
export default {
  proos: ["nilai"],
  mounted() {
    console.log("Component mounted.");
  }
};
</script>