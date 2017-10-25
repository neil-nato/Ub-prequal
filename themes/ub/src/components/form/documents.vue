<template lang="html">
  <div class="documents-section">
  	<h3 class="section-title">
      <span class="fa fa-circle mr-2"></span>
      Documents</h3>

    <div class="form-section">
      <p>Please upload the following documents for filing an autoloan.</p>
      <p>You can opt to do this later. We will send you an email reminder regarding this!</p>

      <div class="container">
        <div class="card row">
          <div class="card-body text-center py-4">
            <!--
            <h6 class="card-subtitle mb-2 text-muted">Drag and drop your ID with photo file in <br> jpeg / png / doc / docx here</h6>
            <span class="my-2"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
            <h6 class="card-subtitle mb-2 text-muted my-2">or</h6>
            <button type="submit" class="btn btn-orange my-2">Select and Upload File</button>
          -->

       <div class="upload">
      <ul v-if="files.length">
        <li v-for="(file, index) in files" :key="file.id">
          <span>{{file.name}}</span> -
          <span>{{file.size | formatSize}}</span> -
          <span v-if="file.error">{{file.error}}</span>
          <span v-else-if="file.success">success</span>
          <span v-else-if="file.active">active</span>
          <span v-else></span>
        </li>
      </ul>
      <ul v-else>
        <td colspan="7">
          <div class="text-center p-5">
            <h4>Drop files anywhere to upload<br/>or</h4>
            <label for="file" class="btn btn-lg btn-primary">Select Files</label>
          </div>
        </td>
      </ul>

      <div v-show="$refs.upload && $refs.upload.dropActive" class="drop-active">
    		<h3>Drop files to upload</h3>
      </div>

      <div class="example-btn">
        <file-upload
          @input="getDocumentFile"
          class="btn btn-primary"
          :multiple="false"
          :drop="true"
          v-model="files"
          ref="upload">
        </file-upload>

      </div>
    </div>
          </div>
        </div>
      </div>
    </div>



  </div>
</template>

<script>
//import Dropzone from 'vue2-dropzone'
import { mapActions } from 'vuex';
export default {

/*  data() {
    return {
        options : {
          url : '/upload',
          paramName: 'file',
          acceptedFiles: {
          extensions: ['image/*', 'application/pdf'],
          message: 'You are uploading an invalid file',
          maxFilesize: 5
          }
        }
    }
  } */

    data() {
        return {
            files: [],
        };
    },
    methods: {
        ...mapActions(['getDocumentFile']),

        abort(file) {
            this.$refs.upload.update(file, {active: false});
      // or
      // this.$refs.upload.update(file, {error: 'abort'})
        },
    },


};
</script>


<style lang="css">
.file-avatar img {
  width : auto;
}

</style>
