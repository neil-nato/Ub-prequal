<template lang="html">
  <div class="info-col">
    <div class="col col-md-4">
        <i :class="icon"></i>
        <p class="info-title">
            {{ title }}
        </p>
        <p class="info-desc">
            {{ description }}
        </p>
    </div>
  </div>

</template>

<script>
export default {
    props : ['title', 'icon', 'description'],

};
</script>

<style lang="css">
</style>
