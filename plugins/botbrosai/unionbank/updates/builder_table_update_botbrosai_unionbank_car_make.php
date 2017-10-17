<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBotbrosaiUnionbankCarMake extends Migration
{
    public function up()
    {
        Schema::table('botbrosai_unionbank_car_make', function($table)
        {
            $table->bigIncrements('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('botbrosai_unionbank_car_make', function($table)
        {
            $table->bigIncrements('id')->unsigned()->change();
        });
    }
}
