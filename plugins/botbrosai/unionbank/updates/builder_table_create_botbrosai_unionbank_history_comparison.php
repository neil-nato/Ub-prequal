<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBotbrosaiUnionbankHistoryComparison extends Migration
{
    public function up()
    {
        Schema::create('botbrosai_unionbank_history_comparison', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('car_model_id');
            $table->bigInteger('applicant_id');
            $table->date('date_created');
            $table->smallInteger('slot_number');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('botbrosai_unionbank_history_comparison');
    }
}
