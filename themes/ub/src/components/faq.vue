<template>
    <section class="faq">
        <div class="container">
            <h2>FAQ</h2>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default" v-for="faqdetail in faqList">
                    <div class="faq-container">
                        <div v-b-toggle="faqdetail.id.toLocaleString()" class="accordion-head" v-on:click="isActive()">
                          <span id="faq-icon" class="faq-icon"><i :class="icon" aria-hidden="true"></i></span>
                          <span class="faq-question">{{ faqdetail.question }}</span>
                        </div>

                        <b-collapse v-bind:id="faqdetail.id.toLocaleString()" class="accordion-body">
                            <ul>
                              <li> {{ faqdetail.answer }} </li>
                            </ul>
                        </b-collapse>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script type="text/javascript">
    import { mapState, mapActions } from 'vuex';

    export default {
        data () {
            return {
                icon: 'fa fa-plus',
                iconStatus: true,
            };
        },
        computed:{
            ...mapState([
                'faqList',
            ]),
        },

        methods:{
            ...mapActions([
                'loadFaqList',
            ]),
            isActive() {
                this.iconStatus = !this.iconStatus;
                if (this.iconStatus) {
                    this.icon = 'fa fa-plus';
                } else {
                    this.icon = 'fa fa-minus';

                }
            },
        },

        mounted(){
            this.loadFaqList();
        },
    };
</script>

<style type="text/css">

</style>
