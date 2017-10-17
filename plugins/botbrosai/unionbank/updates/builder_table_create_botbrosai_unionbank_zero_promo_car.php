<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBotbrosaiUnionbankZeroPromoCar extends Migration
{
    public function up()
    {
        Schema::create('botbrosai_unionbank_zero_promo_car', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('model');
            $table->string('variant');
            $table->string('downpayment');
            $table->string('term');
            $table->bigInteger('zero_promo_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('botbrosai_unionbank_zero_promo_car');
    }
}
