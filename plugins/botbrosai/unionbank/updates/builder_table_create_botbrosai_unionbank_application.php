<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBotbrosaiUnionbankApplication extends Migration
{
    public function up()
    {
        Schema::create('botbrosai_unionbank_application', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('applicant_id');
            $table->integer('page_num');
            $table->string('fname');
            $table->string('lname');
            $table->string('cm_fname');
            $table->string('cm_lname');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('botbrosai_unionbank_application');
    }
}
