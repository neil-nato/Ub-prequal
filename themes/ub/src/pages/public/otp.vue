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
                    <form v-on:submit.prevent="checkOtp" method="POST">
            			<div class="form-group input-text">
            				<label>Enter your OTP (One-Time-Password)</label>
            				<p>Use the code sent to your mobile phone.</p>
            				<input v-model="input.otp_code" type="text" class="form-control" placeholder="Enter OTP" required>
            			</div>
            			<div class="form-group input-submit">
            				<input type="submit" class="btn btn-main" value="Continue">
            				<p>
            					Didn't you get your OTP?
            					<span>
            						<a href="#">Resend Now</a>
            						256
            					</span>
            				</p>
            			</div>
            		</form>
				</div>
			</div>
		</div>
	</section>
    </main>
	<!-- </div> -->
</template>

<script>

import axios from 'axios';

export default {

    data(){
        return {
            input: {
                otp_code: '',
            },
        };
    },

    methods: {
        checkOtp(){
            console.log(this.input);
            axios.post('http://localhost:8000/api/unionbank/otp', this.input).then(response => {
                // this.input = response.data;
                console.log(response);
                console.log('ok');
                this.$router.push({path: '/private'});
            }).catch(error =>{
                console.log(error);
            });
        },

    },
};
</script>
