<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBotbrosaiUnionbankTerm extends Migration
{
    public function up()
    {
        Schema::create('botbrosai_unionbank_term', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigInteger('id');
            $table->string('term');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('botbrosai_unionbank_term');
    }
}
