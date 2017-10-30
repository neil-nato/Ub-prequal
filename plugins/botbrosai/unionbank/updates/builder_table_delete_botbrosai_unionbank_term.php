<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteBotbrosaiUnionbankTerm extends Migration
{
    public function up()
    {
        Schema::dropIfExists('botbrosai_unionbank_term');
    }
    
    public function down()
    {
        Schema::create('botbrosai_unionbank_term', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigInteger('id');
            $table->string('term', 255);
        });
    }
}
