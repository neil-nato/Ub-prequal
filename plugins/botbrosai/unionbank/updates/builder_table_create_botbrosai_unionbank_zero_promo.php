<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBotbrosaiUnionbankZeroPromo extends Migration
{
    public function up()
    {
        Schema::create('botbrosai_unionbank_zero_promo', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->bigInteger('car_make_id');
            $table->date('start_date');
            $table->date('end_date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('botbrosai_unionbank_zero_promo');
    }
}
