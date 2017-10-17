<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBotbrosaiUnionbankCarModel extends Migration
{
    public function up()
    {
        Schema::table('botbrosai_unionbank_car_model', function($table)
        {
            $table->string('model');
            $table->bigIncrements('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('botbrosai_unionbank_car_model', function($table)
        {
            $table->dropColumn('model');
            $table->bigIncrements('id')->unsigned()->change();
        });
    }
}
