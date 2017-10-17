<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBotbrosaiUnionbankZeroPromoCar extends Migration
{
    public function up()
    {
        Schema::table('botbrosai_unionbank_zero_promo_car', function($table)
        {
            $table->bigInteger('car_make_id');
            $table->bigIncrements('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('botbrosai_unionbank_zero_promo_car', function($table)
        {
            $table->dropColumn('car_make_id');
            $table->bigIncrements('id')->unsigned()->change();
        });
    }
}
