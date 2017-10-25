<template lang="html">
  <div class="comaker-section">
    <h3 class="section-title">
      <span class="fa fa-circle mr-2"></span>
      Co-Maker</h3>

    <div class="form-section">
      <div class="question-item">
        <label>Would you like to add a co-maker?</label>
        <div class="form-group">
          <label class="custom-control custom-radio">
            <input v-model='comakerdata' @change="getApplicant({comakerdata})" name="comaker" value="0" type="radio" class="custom-control-input">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Yes</span>
          </label>
          <label class="custom-control custom-radio">
            <input v-model='comakerdata' @change="getApplicant({comakerdata})" name="comaker" value="1" type="radio" class="custom-control-input">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">No</span>
          </label>
        </div>

      </div> <!-- End of question-item -->
    </div> <!-- End of form-section -->

  </div>
</template>

<script>
import { mapActions } from 'vuex';

export default {  
    data(){
        return {
            comakerdata : '',
        };
    },

    methods: {
        ...mapActions(['getApplicant']),
    },
};
</script>
