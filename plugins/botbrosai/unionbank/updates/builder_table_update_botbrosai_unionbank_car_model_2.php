<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBotbrosaiUnionbankCarModel2 extends Migration
{
    public function up()
    {
        Schema::table('botbrosai_unionbank_car_model', function($table)
        {
            $table->string('variant');
        });
    }
    
    public function down()
    {
        Schema::table('botbrosai_unionbank_car_model', function($table)
        {
            $table->dropColumn('variant');
        });
    }
}
