<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBotbrosaiUnionbankPromo extends Migration
{
    public function up()
    {
        Schema::create('botbrosai_unionbank_promo', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('botbrosai_unionbank_promo');
    }
}
