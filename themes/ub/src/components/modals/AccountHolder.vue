<template lang="html">
  <div>
    <b-modal id="modalAccountHolder" title="Wait!!"  ref="modal" hide-footer>
      <div class="">
        <b-form @submit="onSubmit">
          <h5>Are you an existing GetGo Account Member ?</h5>
          <b-form-radio-group id="acountOptions"
          v-model="form.member" :options="getgoMember"
          name="member"  required
          />

          <b-form-group id="getgoAccountGroup" v-if="form.member == 'yes'"
                        label="GetGo Number:" label-for="getgoAccountNumber"
                        description="Please input your GetGo account number. This number will be linked to your approved credit or debit card.">
            <b-form-input id="getgoAccountNumber"
                          type="number" v-model="form.ggn"
                          aria-describedby="input-feeback"
                          :state="nameState"
                          placeholder="GetGo Number"
                          />
              <b-form-feedback id="input-feedback">
                Enter Getgo Account Number
              </b-form-feedback>
          </b-form-group>

          <b-button type="submit" variant="primary">Submit</b-button>
        </b-form>
      </div>
    </b-modal>
  </div>

</template>

<script>
import qs from 'query-string';

export default {
    data() {
        return {
            form : {
                member: '',
                ggn:'',
            },

            getgoMember : [
        { text: 'Yes', value: 'yes' },
        { text: 'no', value: 'no' },
        { text: 'I don\'t know', value: 'idk' },
            ],

        };
    },

    computed: {
        nameState() {
            return this.form.ggn.length == 10 ? null : false;
        },
    },

    methods: {
        onSubmit(evt) {
            evt.preventDefault();
            console.log(JSON.stringify(this.form));
            this.$refs.modal.hide();

      //Modal Doesn't close quickly so you need to setTimeOut Before you route
            setTimeout( function() {
                this.$router.push('/apply?' + qs.stringify(this.form));
            }.bind(this), 1000 );
        },

        nameState() {
            return this.form.ggn.length > 10 ? null : false;
        },
    },


};
</script>

<style lang="css">
</style>
