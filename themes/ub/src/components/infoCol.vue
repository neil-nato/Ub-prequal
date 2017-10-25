<template lang="html">
  <b-col>
    <div class="info-col">
        <i :class="icon"></i>
        <p class="info-title">
            {{ title }}
        </p>
        <p class="info-desc">
            {{ description }}
        </p>
    </div>
 </b-col>
</template>

<script>
export default {
    props : ['title', 'icon', 'description'],

};
</script>

<style lang="css">
</style>
