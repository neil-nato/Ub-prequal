<template lang="html">
  <nav id="dev-nav">
    <div class="">
      <h4>Dev Nav</h4>
      <p>for dev test only</p>
      <ul>
        <li v-for="items in devNav">
          <router-link :to="items.link"> {{ items.nav }} </router-link>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
    data(){
        return {
            devNav : [
                {
                    link : '/',
                    nav : 'home',
                },
                {
                    link : 'otp',
                    nav : 'otp',
                },
                {
                    link : 'private',
                    nav : 'private',
                },
                {
                    link : 'calculator',
                    nav : 'calculator',
                },
            ],
        };
    },
};
</script>

<style lang="css">
</style>


/
otp
private
calculator
