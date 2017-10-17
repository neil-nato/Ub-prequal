<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBotbrosaiUnionbankZeroPromoCar2 extends Migration
{
    public function up()
    {
        Schema::table('botbrosai_unionbank_zero_promo_car', function($table)
        {
            $table->string('srp');
        });
    }
    
    public function down()
    {
        Schema::table('botbrosai_unionbank_zero_promo_car', function($table)
        {
            $table->dropColumn('srp');
        });
    }
}
