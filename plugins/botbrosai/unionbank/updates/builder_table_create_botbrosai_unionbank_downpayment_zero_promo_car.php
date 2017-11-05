<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBotbrosaiUnionbankDownpaymentZeroPromoCar extends Migration
{
    public function up()
    {
        Schema::create('botbrosai_unionbank_downpayment_zero_promo_car', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigInteger('zero_promo_car_id');
            $table->bigInteger('downpayment_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('botbrosai_unionbank_downpayment_zero_promo_car');
    }
}
