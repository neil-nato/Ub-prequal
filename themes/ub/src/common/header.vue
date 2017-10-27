<template lang="html">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="themes/ub/assets/images/logo.png" alt="UnionBank GetGo Autoloans Promo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="nav navbar-nav pull-right">
          <li v-for="alias in nav">
            <a :href="alias.menuLinks">
              {{ alias.menu }}
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>






  <!-- <header>
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



                </ul>
            </div>
          </div>
    </nav>
  </header> -->
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
.navbar-brand img {
    width: 100%;
    height: auto;
  }
</style>
