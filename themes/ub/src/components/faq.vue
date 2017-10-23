<template>
    <section class="faq">
        <div class="container">
            <h2>FAQ</h2>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default" v-for="faqdetail in faqList">
                    <div class="panel-heading" role="tab">
                        <div class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" v-bind:href="'#'+faqdetail.id"  aria-expanded="true" v-bind:aria-controls="faqdetail.id">
                            <span class="faq-icon">+</span>
                            {{faqdetail.question}}
                            </a>
                        </div>
                    </div>
                    <div v-bind:id="faqdetail.id" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                        {{faqdetail.answer}}    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script type="text/javascript">
    import axios from 'axios';

    export default {
        data(){
            return {
                faqList: [],
            };
        },

        mounted() {
            var _self = this;

            axios.get('http://localhost:8000/api/unionbank/faq/list').then(function (response){
                _self.faqList = response.data;
                console.log(_self.faqList);
            });

        },
    };
</script>

<style type="text/css">

</style>
