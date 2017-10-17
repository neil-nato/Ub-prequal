<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBotbrosaiUnionbankCarModel3 extends Migration
{
    public function up()
    {
        Schema::table('botbrosai_unionbank_car_model', function($table)
        {
            $table->string('body_type');
            $table->string('dimensions');
            $table->string('fuel');
            $table->string('top_speed');
            $table->string('max_power');
            $table->string('max_torque');
        });
    }
    
    public function down()
    {
        Schema::table('botbrosai_unionbank_car_model', function($table)
        {
            $table->dropColumn('body_type');
            $table->dropColumn('dimensions');
            $table->dropColumn('fuel');
            $table->dropColumn('top_speed');
            $table->dropColumn('max_power');
            $table->dropColumn('max_torque');
        });
    }
}
