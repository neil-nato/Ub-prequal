<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBotbrosaiUnionbankCarMake extends Migration
{
    public function up()
    {
        Schema::create('botbrosai_unionbank_car_make', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('botbrosai_unionbank_car_make');
    }
}
