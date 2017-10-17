<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBotbrosaiUnionbankHistoryCalculator extends Migration
{
    public function up()
    {
        Schema::create('botbrosai_unionbank_history_calculator', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('applicant_id');
            $table->bigInteger('car_model_id');
            $table->string('budget');
            $table->string('downpayment');
            $table->string('terms');
            $table->string('reward_type');
            $table->integer('points');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('botbrosai_unionbank_history_calculator');
    }
}
