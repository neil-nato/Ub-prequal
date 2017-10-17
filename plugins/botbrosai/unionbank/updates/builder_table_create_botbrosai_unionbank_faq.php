<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBotbrosaiUnionbankFaq extends Migration
{
    public function up()
    {
        Schema::create('botbrosai_unionbank_faq', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('question');
            $table->string('answer');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('botbrosai_unionbank_faq');
    }
}
