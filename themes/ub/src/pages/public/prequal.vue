<template>
    <main class="qualify-page">
        <section class="content-banner">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col col-md-8 banner">
    					<div class="banner-text">
    						<h3>Contratulations!</h3>
    						<p>
    							You qualify for autoloan details <br>
    							mechanics points wheels.
    						</p>
    					</div>
    				</div>
    				<div class="col col-md-4 otp-form">
              <form v-on:submit.prevent="checkRF" method="POST">
                  <div class="form-group input-text">
                      <label>Enter your prequalification code.</label>
                      <p>Use the code sent to your email.</p>
                      <input v-model="input.prequalification_code" type="text" class="form-control" placeholder="Enter Code">
                  </div>
                  <div class="form-group input-submit">
                      <input type="submit" class="btn btn-main" value="Check">
                  </div>
              </form>
    				</div>
    			</div>
    		</div>

        <welcome />
    	</section>
    </main>

</template>


<script>

import axios from 'axios';

export default {

    data(){
        return {
            input: {
                prequalification_code: '',
            },
        };
    },

    methods: {
        checkRF(){
            console.log(this.input);
            axios.post('http://localhost:8000/api/unionbank/prequalification-code', this.input).then(response => {
                this.$router.push({path: '/Otp'});
            }).catch(error =>{
                console.log(error);
            });
        },

    },
};
</script>
