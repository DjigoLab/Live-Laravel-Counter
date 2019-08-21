<template>
  <main id="counter">
    <p id="quantity">{{number}}</p>
    <div class="buttons">
      <div class="plus">
        <p>+</p>
      </div>
      <div class="minus">
        <p>-</p>
      </div>
    </div>
  </main>
</template>

<script>
export default {
  data() {
    return {
      number: 0
    };
  }
};
</script>
