<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Online now:</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      count: 0
    };
  },
  mounted() {
    this.listen();
  },
  methods: {
    listen() {
      Echo.join("counter")
        .here(users => (this.count = users.length))
        .joining(user => this.count++)
        .leaving(user => this.count--);
    }
  }
};
</script>
