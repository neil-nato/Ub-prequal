<template lang="html">
  <div class="employment-information">

    <h3 class="section-title">
      <span class="fa fa-circle mr-2"></span>
      Employee Information</h3>

      <div class="form-section">

        <div class="question-item">
            <label>Employment/Business Type</label>
            <div class="form-group">
                  <div class="form-check">
                    <b-form-radio-group required id="empbiz_type" v-model="empbiz_type" name="empbiz_type" @input="getApplicant({empbiz_type, comaker})">
                      <div class="row">
                        <div class="col-md-3 col-lg-3">
                          <b-form-radio value="0">Employed - Private</b-form-radio>
                        </div>
                        <div class="col-md-3 col-lg-3">
                          <b-form-radio value="1">Employed - Government</b-form-radio>
                        </div>
                        <div class="col-md-3 col-lg-3">
                          <b-form-radio value="2">OFW</b-form-radio>
                        </div>
                        <div class="col-md-3 col-lg-3">
                          <b-form-radio value="3">Sole Proprietorship</b-form-radio>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 col-lg-3">
                          <b-form-radio value="4">Partnership</b-form-radio>
                        </div>
                        <div class="col-md-3 col-lg-3">
                          <b-form-radio value="5">Owner of Corporation</b-form-radio>
                        </div>
                        <div class="col-md-3 col-lg-3">
                          <b-form-radio value="6">Unemployed</b-form-radio>
                        </div>
                      </div>
                    </b-form-radio-group>
                    <span v-show="errors.has('nationality')" class="help is-danger">{{ error.required }}</span>
                  </div>

                <span v-show="errors.has('empbiz_type')" class="help is-danger">{{ error.required }}</span>
            </div>
        </div>

        <div class="question-item">
          <label>Employment Details</label>
          <div class="form-group my-2">
            <div class="row">
              <div class="col-md-8 col-lg-6 my-2">
              	<label class="sr-only" for="inlineFormInput">Employer / Name of Business if Self-Employed</label>
                <input v-model="empbizname" @input="getApplicant({empbizname, comaker})"
                v-validate="'required'"  required name="empbizname" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Employer / Name of Business if Self-Employed">
                <span v-show="errors.has('empbizname')" class="help is-danger">{{ error.required }}</span>
              </div>
             </div>
            <div class="row"><div class="col-md-8 col-lg-6 my-2">
              <label class="sr-only" for="inlineFormInput">Position / Rank</label>
              <input v-model="jobpos" @input="getApplicant({jobpos, comaker})" name="jobpos" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Position / Rank">
            </div></div>
          </div>

            <div class="form-group row">
                <label class="col-md-2 col-form-label">Years of Service:</label>

                <div class="my-2 col-md-4 col-lg-3">
                    <label class="sr-only" for="lengthEmpYears">Years</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input v-model="empbiz_y" @input="getApplicant({empbiz_y, comaker})" type="number" class="form-control" id="lengthEmpYears" name="empbiz_y" placeholder="No. of Years">
                        <div class="input-group-addon">Yrs.</div>
                    </div>
                </div>

                <div class="my-2 col-md-4 col-lg-3">
                    <label class="sr-only" for="lengthEmpMonths">Months</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input v-model="empbiz_m" @input="getApplicant({empbiz_m, comaker})" type="number" class="form-control" id="lengthEmpMonths" name="empbiz_m" placeholder="No. of Months">
                        <div class="input-group-addon">Mos.</div>
                    </div>
                </div>
            </div>

        </div>

        <div class="question-item">
           <label>Office Address</label>
           <div class="form-group my-2">
            <div class="row"><div class="col-md-8 col-lg-6 my-2">
            	<label class="sr-only" for="inlineFormInput">Office Address Line 1</label>
              <input v-model="empbizadd1" @input="getApplicant({empbizadd1, comaker})" name="empbizadd1" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Office Address Line 1: Unit no. / Building no. / Street / ">
             </div></div>
              <div class="row"><div class="col-md-8 col-lg-6 my-2">
                <input v-model="empbizadd2" @input="getApplicant({empbizadd2, comaker})"  name="empbizadd2" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Office Address Line 2: City / Province">
              </div></div>
            <div class="row"><div class="col-md-8 col-lg-6 my-2">
              <label class="sr-only" for="inlineFormInput">Office Phone</label>
              <input v-model="empbizphone" @input="getApplicant({empbizphone, comaker})" name="empbizphone" type="number" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Office Phone">
            </div></div>
          </div>
        </div>

        <div class="question-item">
          <label>Government Identification Numbers</label>
            <div class="form-group my-2">
              <div class="row"><div class="col-md-8 col-lg-6 my-2">
                <label class="sr-only" for="inlineFormInput">Tax Identification Number</label>
                <input v-model="tin" @input="getApplicant({tin, comaker})" name="tin" type="number" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Tax Identification Number">
              </div></div>
              <div class="row"><div class="col-md-8 col-lg-6 my-2">
                <label class="sr-only" for="inlineFormInput">SSS Number</label>
                <input v-model="sss" @input="getApplicant({sss, comaker})" name="sss" type="number" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="SSS Number">
              </div></div>
            </div>
        </div>

      </div> <!-- End of form-section -->
  </div>
</template>

<script>
import { mapActions, mapState } from 'vuex';

export default {
    props: ['comaker'],
    data() {
        return {
            empbiz_type : '',
            empbizname: '',
            jobpos: '',
            empbiz_y: '',
            empbiz_m: '',
            empbizadd1: '',
            empbizadd2: '',
            empbizphone: '',
            tin: '',
            sss: '',

            error : {
                required : 'This field is required',
            },
        };
    },
    computed: {
        ...mapState(['applicant']),
    },
    methods: {
        ...mapActions(['getApplicant']),
    },
};
</script>

<style lang="css">
</style>
