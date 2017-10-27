<template lang="html">
  <layout>
    <div class="article-page privay-policy">
      <div class="container">
        <h2>PRIVACY POLICY</h2>
        <h3>Terms of Use</h3>
        <div class="">
          <p><strong> BY ACCESSING THIS SITE, YOU AGREE TO THE FOLLOWING TERMS AND CONDITIONS:</strong></p>
          <p v-for="items in text">{{ items }}</p>
        </div>
      </div>
    </div>
  </layout>
</template>

<script>
export default {
    data() {
        return {
            text : [
                'UnionBank maintains this Site to provide you with information about UnionBank products and services and to facilitate communication with UNIONBANK OF THE PHILIPPINES and its related companies. UNIONBANK OF THE PHILIPPINES requires that all the visitors to our site(s) on the Internet (the "Site") adhere to the following rules and regulations. By accessing the Site you indicate your acknowledgment and acceptance of these terms and conditions. From time to time we may revise these terms and conditions.',
                'Copyright in the pages, screens, UNIONBANK OF THE PHILIPPINES owns text and images appearing at the Site or others as indicated. The information and materials contained in the Site may not be copied, displayed, distributed, downloaded, licensed, modified, published, reposted, reproduced, reused, sold, transmitted, used to create a derivative work or otherwise used for public or commercial purposes without the express written permission of UNIONBANK OF THE PHILIPPINES.',
                'Not all of the products or services described on the Site are available in all geographic areas. You may not be eligible for all the products or services described. UnionBank reserves the right to determine the eligibility for any product or service.',
                'Any communication or material you transmit to us via the Site or Internet electronic mail is on a non-confidential basis and may be used by UnionBank for any purpose within the limits of our privacy statement including reproduction, publication broadcast and posting.',
                'We will use our best efforts to include accurate and up to date information on the Site, but we make no warranties or representations as to the accuracy of the information. You agree that all access and use of the Site and its contents is at your own risk. By using the Site, you acknowledge that we specifically disclaim any liability (whether based in contract, tort, strict liability or otherwise) for any direct, indirect, incidental, consequential, or special damages arising out of or in any way connected with your access to or use of the Site, (even if we have been advised of the possibility of such damages) including liability associated with any viruses which may infect a user\'s computer equipment.',
                'With regard to services or products purchased or obtained by the user from a non-UnionBank person or entity, UnionBank makes no warranty of merchantability or warranty of fitness for a particular purpose with regard to such services and products and UnionBank specifically disclaims all other warranties with regard to said services and products.',
                'You agree that your use of this Site shall be governed by all applicable Philippine laws and agree that venue of any relevant suit shall be located in the proper courts of the City of Makati, Philippines.'],
        };
    },
};
</script>

<style lang="css">
</style>
