<template lang="html">
  <div class="applicant-identity">
    <h3 class="section-title">
        <span class="fa fa-circle mr-2"></span>
        Applicant Identity
    </h3>
    <div class="form-section">
        <div class="question-item">
            <label>Name and Birthday</label>
            <div class="row">
              <div class="col-md-4 my-2">
                <label class="sr-only">First Name</label>
                <input type="text" v-model="fname" name="fname" @input="getApplicant({fname, comaker})"
                v-validate="'required'" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="First Name" required>
                <span v-show="errors.has('fname')" class="help is-danger">{{ error.required }}</span>
               </div>
               <div class="col-md-4 my-2">
                <label class="sr-only">Last Name</label>
                <input type="text" v-model="lname" name="lname" @input="getApplicant({lname, comaker})"
                v-validate="'required'" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Last Name" required>
                <span v-show="errors.has('lname')" class="help is-danger">{{ error.required }}</span>
              </div>
              <div class="col-md-4 my-2">
                <label class="sr-only">Middle Name</label>
                <input type="text" v-model="mname" name="mname" @input="getApplicant({mname, comaker})" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Middle Name" >
              </div>
              <div class="col-md-4 my-2">
                <label class="sr-only">Birthday</label>
                <b-form-input v-model="bday"
                  type="date" name="bday"
                  @input="getApplicant({bday, comaker})"
                  required  v-validate="'required'"/>

                <span v-show="errors.has('bday')" class="help is-danger">{{ error.required }}</span>
              </div>
              <div class="col-md-8 my-2">
                <label class="sr-only">Birth Place</label>
                <input type="text" v-model="bPlace" name="bPlace" @input="getApplicant({bPlace, comaker})"
                v-validate="'required'" required class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Birth Place">
                <span v-show="errors.has('bPlace')" class="help is-danger">{{ error.required }}</span>
              </div>
            </div>
        </div>

        <div class="question-item">
            <label>Gender</label>
            <b-form-radio-group required id="gender-radio" v-model="gender" name="gender" @input="getApplicant({gender, comaker})">
              <b-form-radio value="0">Male</b-form-radio>
              <b-form-radio value="1">Female</b-form-radio>
            </b-form-radio-group>
            <span v-show="errors.has('gender')" class="help is-danger">{{ error.required }}</span>
        </div>

        <div class="question-item">
            <label>Civil Status</label>
            <b-form-radio-group required id="civilstat-radio" v-model="civilstat" name="civilstat" @input="getApplicant({civilstat, comaker})">
              <b-form-radio value="single">Single</b-form-radio>
              <b-form-radio value="divorced">Divorced</b-form-radio>
              <b-form-radio value="widowed">Widowed</b-form-radio>
              <b-form-radio value="separated">Separated</b-form-radio>
              <b-form-radio value="married">Married</b-form-radio>
              <b-form-radio value="Anulled">Anulled</b-form-radio>
              <b-form-radio value="live-in">Live-in</b-form-radio>
            </b-form-radio-group>
            <span v-show="errors.has('civilstat')" class="help is-danger">{{ error.required }}</span>
        </div>

        <div class="question-item">
            <label>Citizenship</label>
            <b-form-radio-group required id="civilstat-radio" v-model="nationality" name="nationality" @input="getApplicant({nationality, comaker})">
              <b-form-radio value="FIL">Filipino</b-form-radio>
              <b-form-radio value="OTH">Other</b-form-radio>
            </b-form-radio-group>
            <span v-show="errors.has('nationality')" class="help is-danger">{{ error.required }}</span>
        </div>

        <div class="question-item">
          <label>ACR No.</label>
          <input type="text" v-model="acrno" @input="getApplicant({acrno, comaker})"
          name="acrno" class="form-control form-others mb-2 mr-sm-2 mb-sm-0 col-md-6" placeholder="ACR Number"/>
        </div>

        <div class="question-item">
            <label>Contact Details</label>
            <div class="form-group my-2">
                <div class="row col-md-8 col-lg-6 my-2">
                    <label class="sr-only">Mobile Number</label>
                  <input v-model="mobileno" v-mask="'###########'" @input="getApplicant({mobileno, comaker})"
                  v-validate="'required|numeric'"
                  name="mobileno" type="number" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Mobile Number">
                  <span v-show="errors.has('mobileno')" class="help is-danger">{{ error.required }}</span>
                 </div>
                 <div class="row col-md-8 col-lg-6 my-2">
                    <label class="sr-only">Home Phone</label>
                  <input v-model="resphone" @input="getApplicant({resphone, comaker})"
                  v-validate="'required|numeric'" name="resphone" type="number" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Home Phone">
                  <span v-show="errors.has('resphone')" class="help is-danger">{{ error.required }}</span>
                </div>
                <div class="row col-md-8 col-lg-6 my-2">
                  <label class="sr-only">Email Address</label>
                  <input v-model="email" @input="getApplicant({email, comaker})"
                  v-validate:email="'required|email'" name="email" type="email"
                  :class="{'input': true, 'is-danger': errors.has('email') }"
                  class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Email Address">
                   <span v-show="errors.has('email')" class="help is-danger">{{ errors.first('email') }}</span>
                </div>
            </div>
        </div>

        <div class="question-item">
            <label>Address</label>
            <div class="form-group">
                <div class="row">
                    <div class="form-check col-md-4 col-lg-3">
                        <label class="custom-control custom-radio">
                            <input v-model="res_ownership" @change="getApplicant({res_ownership, comaker})" name="res_ownership" value="1" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Owned</span>
                        </label>
                    </div>
                    <div class="form-check col-md-4 col-lg-3">
                        <label class="custom-control custom-radio">
                            <input v-model="res_ownership" @change="getApplicant({res_ownership, comaker})" name="res_ownership" value="2" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Rented</span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-check col-md-4 col-lg-3">
                        <label class="custom-control custom-radio">
                            <input v-model="res_ownership" @change="getApplicant({res_ownership, comaker})" name="res_ownership" value="3" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Living with Parents</span>
                        </label>
                    </div>
                    <div class="form-check col-md-4 col-lg-3">
                        <label class="custom-control custom-radio">
                            <input v-model="res_ownership" @change="getApplicant({res_ownership, comaker})" name="res_ownership" value="0" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Mortgaged</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 col-form-label years-of-stay">Years of Stay:</label>

                <div class="my-2 col-md-4 col-lg-3">
                    <label class="sr-only" for="lengthYears">Years</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input v-model="lengthofstay_y" @input="getApplicant({lengthofstay_y, comaker})" min="0" type="number" class="form-control" id="lengthYears" name="lengthofstay_y" placeholder="No. of Years">
                        <div class="input-group-addon">Yrs.</div>
                    </div>
                </div>

                <div class="my-2 col-md-4 col-lg-3">
                    <label class="sr-only" for="lengthYears">Months</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input v-model="lengthofstay_m" @input="getApplicant({lengthofstay_m, comaker})" min="0"  type="number" class="form-control" id="lengthYears" name="lengthofstay_m" placeholder="No. of Months">
                        <div class="input-group-addon">Mos.</div>
                    </div>
                </div>
            </div>

            <div class="form-group my-2">
                <div class="row">
                    <div class="col-md-8 col-lg-6 my-2">
                      <label class="sr-only">Residential Address</label>
                      <input v-model="resadd1" @input="getApplicant({resadd1, comaker})"
                      v-validate="'required'"  required  name="resadd1" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="House No. / Street / Baranagay / District Address">
                      <span v-show="errors.has('resadd1')" class="help is-danger">{{ error.required }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-lg-6 my-2">
                      <input v-model="resadd2" @input="getApplicant({resadd2, comaker})"
                      v-validate="'required'"  required name="resadd2" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="City / Province">
                      <span v-show="errors.has('resadd2')" class="help is-danger">{{ error.required }}</span>
                    </div>
                </div>
            </div>

        </div> <!-- End of question-title -->
    </div> <!-- End of form-section -->

  </div>
</template>

<script>

import { mapActions, mapState } from 'vuex';

export default {
    props: ['comaker'],
    data() {
        return {
            lname: '',
            fname: '',
            mname: '',
            bday: '',
            bPlace: '',
            gender: '',
            civilstat : '',
            nationality : '',
            acrno: '',
            mobileno : '',
            resphone: '',
            email : '',
            res_ownership : '',
            lengthofstay_y: '',
            lengthofstay_m: '',
            resadd1: '',
            resadd2: '',

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
