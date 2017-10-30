<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBotbrosaiUnionbank extends Migration
{
    public function up()
    {
        Schema::create('botbrosai_unionbank_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('downpayment');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('botbrosai_unionbank_');
    }
}
