<template lang="html">

    <div class="apply-form mb-5">
      <b-form @submit="onSubmit" action="http://10.19.20.88/eclipse/webservices/newappservice.php">
      <loan-details :comaker="comaker" />

      <div class="form">
        <div class="row my-4 mt-5">
        	<div class="col-md-12">
        		<h1>Applicant Information</h1>
        	</div>
        </div>
        <!--
        <existing-user :comaker="comaker" />
        -->
        <applicant-identity :comaker="comaker" />
        <employment-details  :comaker="comaker" />
        <documents />
        <co-maker v-if="!comaker" />
        <agree />


        <div class="form-group col-6 text-center mx-auto">
            <div v-if="applicant.comakerdata == 1 || comaker == true " class="submit">
              <button type="submit" class="btn btn-orange">Send my Application</button>
            </div>
            <div v-if="applicant.comakerdata == 0 && !comaker" class="to-comaker">
              <router-link to='/apply-comaker'>
                <button class="btn btn-orange">Next</button>
              </router-link>

            </div>
        </div>
      </div>

      </b-form>
    </div>

</template>

<script>
import { mapActions, mapState } from 'vuex';
export default {
    props: ['comaker'],

    computed :{
        ...mapState([
            'applicant',
            'form',
        ]),
    },

    methods: {
        ...mapActions(['getFormData']),

        onSubmit(evt) {
            this.getFormData();
            evt.preventDefault();
            alert(JSON.stringify(this.form));

            axios.post('upload_file', file, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                },
            });

        },
    },

};

</script>

<style lang="css">
</style>
