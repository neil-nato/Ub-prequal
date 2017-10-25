<template lang="html">
  <div class="existing-user mb-5">

    <div class="question-item">
		<label>Are you an UnionBank Depositor?</label>
	    <div class="form-group form-inline">
	      <label class="custom-control custom-radio">
			  <input name="depositor" value="1" type="radio" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Yes</span>
		  </label>
			<label class="custom-control custom-radio">
			  <input  name="depositor" value="0" type="radio" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">No</span>
		  </label>
	    </div>
    </div>

    <div class="question-item" v-if="!comaker">
		<label>Do you have an existing credit card?</label>
	    <div class="form-group form-inline">
	      <label class="custom-control custom-radio">
			  <input name="withexistingcard" value="1" type="radio" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Yes</span>
		  </label>
			<label class="custom-control custom-radio">
			  <input name="withexistingcard" value="0" type="radio" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">No</span>
		  </label>
			<input type="number" name="getgo_card" class="form-control form-others mb-2 mr-sm-2 mb-sm-0 col-md-6"  placeholder="Card Number">
	    </div>
    </div>

    <div class="question-item">
		<label>Do you have a GetGo Card?</label>
	    <div class="form-group form-inline">
	      <label class="custom-control custom-radio">
			  <input  name="getgo" value="1" type="radio" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">Yes</span>
		  </label>
			<label class="custom-control custom-radio">
			  <input  name="getgo" value="0" type="radio" class="custom-control-input">
			  <span class="custom-control-indicator"></span>
			  <span class="custom-control-description">No</span>
		  </label>
			<input type="number" name="getgo_card" class="form-control form-others mb-2 mr-sm-2 mb-sm-0 col-md-6"  placeholder="Please enter your GetGo Card Number">
	    </div>
    </div>

  </div>
</template>

<script>
export default {
    props: ['comaker'],
};
</script>

<style lang="css">
</style>
