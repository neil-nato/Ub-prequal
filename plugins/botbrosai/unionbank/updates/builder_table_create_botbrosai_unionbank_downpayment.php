<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBotbrosaiUnionbankDownpayment extends Migration
{
    public function up()
    {
        Schema::create('botbrosai_unionbank_downpayment', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('downpayment');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('botbrosai_unionbank_downpayment');
    }
}
