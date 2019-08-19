<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Example Component</div>

          <div class="card-body">I'm an example component.</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("ExampleComponent mounted.");
  }
};
</script>

// MyButton.vue

<template>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header">My Button</div>

        <div class="card-body">I'm the My Button</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("MyButton mounted.");
  }
};
</script>

// MyList.vue

<template>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header">My List</div>

        <div class="card-body">I'm the My List</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("MyList mounted.");
  }
};
</script>




















