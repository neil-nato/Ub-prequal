<template lang="html">
  <layout>
    <div class="article-page faq">
      <div class="container">
        <h2>FAQs - Autoloans</h2>
        <h3>We love hearing from you. If you have any concerns not listed below, send us an email at autoloans@unionbankph.com.</h3>
        <div class="faq-section">
          <div class="accordion" v-for="items in faq">
            <div class="faq-container">
              <div v-b-toggle="items.id" class="accordion-head">
                <h5>{{ items.question }}</h5>
              </div>

              <b-collapse :id="items.id" class="accordion-body">
                <b-card>
                    <ul>
                      <li v-for="list in items.answer"> {{ list.list }}
                        <ul>
                          <li v-for="inner in list.innerList"> {{ inner.item }}</li>
                        </ul>
                      </li>
                    </ul>
                </b-card>
              </b-collapse>
            </div>
          </div>
        </div>
      </div>
    </div>
  </layout>
</template>

<script>
export default {
    data(){
        return {
            faq : [
                {
                    id: '1',
                    question: 'What type of cars can I purchase?',
                    answer : [
            { list : 'UnionBank Auto Loans will help you purchase brand new or second hand cars or brand new light trucks.' },
                    ],
                },
                {
                    id: '2',
                    question: 'Am I eligible to get a UnionBank auto loan?',
                    answer : [
                        { list : `Yes, if you are between 21 to 65 years old with a total monthly income of P50,000.
          Foreign nationals married to a Filipina or business entities like corporations and partnerships
          may also apply for an auto loan.` },
          { list : 'Client must be 65 years old upon maturity of loan.' },
                    ],
                },
                {
                    id: '3',
                    question: 'What do I need to submit when I apply for a UnionBank auto loan?',
                    answer : [
                        { list : 'If you are employed, you will need to submit the following:',
                            innerList : [
                { item : 'COE - Certificate of employment with compensation'},
                { item : 'Latest Income Tax Return (ITR)*' },
                { item : 'Completely filled up application form, or apply online'},
                            ] },
                        { list : 'If you are self-employed, you will need to submit the following:',
                            innerList : [
              { item : 'Business Registration papers (DTI, SEC if applicable)' },
              { item : 'ITR with audited financial statements (2 years)'},
              { item : 'Trade references'},
              { item : 'Completely filled up application form'},
                            ]},
                    ],
                },
                {
                    id: '4',
                    question: 'How can I pay for my loan?',
                    answer : [
                        { list : `Auto Debit Arrangement (ADA) - Automatically deducted from your account.
            You may open a Checking or Savings Account with us with no maintaining balance;
            or a Debit GetGo Card.`},
            { list : 'Postdated Checks (PDC)' },
                    ],
                },
                {
                    id: '5',
                    question: 'Post Booking FAQs',
                    answer : [
            { list : 'For booked accounts, If you have any concerns about your existing account with us, you may call (02) 841-8600 or email us at autoloans@unionbankph.com'},
                    ],
                },
            ],
        };
    },
};
</script>

<style lang="css">
</style>
