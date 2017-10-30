<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBotbrosaiUnionbankDownpaymentZeroPromoCar extends Migration
{
    public function up()
    {
        Schema::rename('botbrosai_unionbank_zero_promo_car_downpayment', 'botbrosai_unionbank_downpayment_zero_promo_car');
    }
    
    public function down()
    {
        Schema::rename('botbrosai_unionbank_downpayment_zero_promo_car', 'botbrosai_unionbank_zero_promo_car_downpayment');
    }
}
