<template lang="html">
  <div class="employment-information">

    <h3 class="section-title">
      <span class="fa fa-circle mr-2"></span>
      Employee Information</h3>

      <div class="form-section">

        <div class="question-item">
            <label>Employment/Business Type</label>
            <div class="form-group">
                <div class="row">
                  <div class="form-check col-md-3 col-lg-2">
                    <label class="custom-control custom-radio">
                      <input v-model="empbiz_type" @change="getApplicant({empbiz_type, comaker})"
                      v-validate="'required'"  required name="empbiz_type" type="radio" class="custom-control-input" value="0">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Employed - Private</span>
                    </label>
                  </div>
                  <div class="form-check col-md-3 col-lg-2">
                    <label class="custom-control custom-radio">
                      <input v-model="empbiz_type" @change="getApplicant({empbiz_type, comaker})"
                      v-validate="'required'"  required name="empbiz_type" type="radio" class="custom-control-input" value="1">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Employed - Government</span>
                    </label>
                  </div>
                  <div class="form-check col-md-3 col-lg-2">
                    <label class="custom-control custom-radio">
                      <input v-model="empbiz_type" @change="getApplicant({empbiz_type, comaker})"
                      v-validate="'required'"  required name="empbiz_type" type="radio" class="custom-control-input" value="2">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">OFW</span>
                    </label>
                  </div>
                  <div class="form-check col-md-3 col-lg-2">
                    <label class="custom-control custom-radio">
                      <input v-model="empbiz_type" @change="getApplicant({empbiz_type, comaker})"
                      v-validate="'required'"  required name="empbiz_type" type="radio" class="custom-control-input" value="3">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Sole Proprietorship</span>
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="form-check col-md-3 col-lg-2">
                    <label class="custom-control custom-radio">
                      <input v-model="empbiz_type" @change="getApplicant({empbiz_type, comaker})"
                      v-validate="'required'"  required name="empbiz_type" type="radio" class="custom-control-input" value="4">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Partnership</span>
                    </label>
                  </div>
                  <div class="form-check col-md-3 col-lg-2">
                    <label class="custom-control custom-radio">
                      <input v-model="empbiz_type" @change="getApplicant({empbiz_type, comaker})"
                      v-validate="'required'"  required name="empbiz_type" type="radio" class="custom-control-input" value="5">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Owner of a Corporation</span>
                    </label>
                  </div>
                  <div class="form-check col-md-3 col-lg-2">
                   <label class="custom-control custom-radio">
                      <input v-model="empbiz_type" @change="getApplicant({empbiz_type, comaker})"
                      v-validate="'required'"  required name="empbiz_type" type="radio" class="custom-control-input" value="6">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Unemployed</span>
                    </label>
                  </div>
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
