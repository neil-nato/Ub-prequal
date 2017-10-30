
  <template lang="html">
    <layout>
      <div class="article-page contact-us">
        <b-container>
          <h2>CONTACT US</h2>
          <p>For more information, email us at autoloans@unionbankph.com</p>
          <small class="note">
            If your concerns were not addressed by any of our resources, send an email to <a href="mailto:customer.service@unionbankph.com">customer.service@unionbankph.com</a> | <a href="mailto:contactus@getgo.com.ph">contactus@getgo.com.ph</a> or via the form below.
          </small>

         <b-form  action="/ajax/mail" method="GET">
            <b-form-group
             description="Let us know your name."
             label="Enter your name">
             <b-form-input id="c-name" name="name" v-model="contact.name" required />
             </b-form-group>


           <b-form-group
            description="Let us know your email ."
            label="Enter your email">
            <b-form-input
            id="c-email"
            name="email"
            v-model="contact.email"
            type="email" required
            />
          </b-form-group>

           <b-form-textarea id="c-text"
                       name="text"
                       v-model="contact.text"
                       placeholder="Enter something"
                       required />


          <button type="submit" class="caption-button">Submit</button>
        </b-form >

        </b-container>

      </div>
    </layout>

  </template>

  <script>
  export default {
      data(){
          return {
              contact : {
                  name :'',
                  email : '',
                  text : '',
              },
          };
      },

      methods: {

          onSubmit(evt) {
              evt.preventDefault();
              alert(JSON.stringify(this.contact));
          },
      },

  };
  </script>

  <style lang="css">
  </style>
