<template lang="html">
  <header>
    <nav class="navbar">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNavbarCollapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
              <a class="navbar-brand" href="/">
                <img src="themes/ub/assets/images/logo.png" alt="UnionBank Logo">
              </a>
            </div>
            <div class="collapse navbar-collapse" id="headerNavbarCollapse">
                <ul class="nav navbar-nav navbar-right">
                  <li v-for="alias in nav">
                    <a :href="alias.menuLinks">
                      {{ alias.menu }}
                    </a>
                  </li>


                </ul>
            </div>
          </div>
    </nav>
  </header>
</template>

<script>
export default {
    data(){
        return {
            nav : [
                {
                    menu : 'Mechanics',
                    menuLinks : 'mechanics',
                },
                {
                    menu : 'Contact Us',
                    menuLinks : 'contact',
                },
                {
                    menu : 'Log In',
                    menuLinks : 'login',
                },
            ],
        };
    },
};
</script>

<style lang="css">
</style>
