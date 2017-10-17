<template>
    <main class="screen3-page">
        <welcome/>
        <info/>
        <loancalculator/>
        <ZeroPromo/>
        <compare/>
        <Faq/>
        <Contact/>
    </main>
</template>

<script>
import Vue from 'vue';
import Promo from './components/promo';
import ZeroPromo from './components/ZeroPromo';
import Faq from './components/faq';
import Compare from './components/compare.vue';
import Welcome from './components/welcome.vue';
import Info from './components/info.vue';
import Loancalculator from './components/loancalculator.vue';
import Contact from './components/contact.vue';

export default {
    components: { Faq, Compare, ZeroPromo, Welcome, Info, Loancalculator, Contact },
};

</script>

<style>

</style>
