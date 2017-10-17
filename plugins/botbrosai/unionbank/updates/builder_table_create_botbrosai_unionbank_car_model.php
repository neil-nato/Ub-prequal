<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBotbrosaiUnionbankCarModel extends Migration
{
    public function up()
    {
        Schema::create('botbrosai_unionbank_car_model', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('gas');
            $table->string('engine_type');
            $table->string('transmission');
            $table->string('price');
            $table->bigInteger('views_increment');
            $table->bigInteger('car_make_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('botbrosai_unionbank_car_model');
    }
}
