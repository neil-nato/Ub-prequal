<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBotbrosaiUnionbankTermZeroPromoCar extends Migration
{
    public function up()
    {
        Schema::create('botbrosai_unionbank_term_zero_promo_car', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigInteger('zero_promo_car_id');
            $table->bigInteger('term_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('botbrosai_unionbank_term_zero_promo_car');
    }
}
