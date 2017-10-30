<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBotbrosaiUnionbankTerm2 extends Migration
{
    public function up()
    {
        Schema::create('botbrosai_unionbank_term', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->text('term');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('botbrosai_unionbank_term');
    }
}
