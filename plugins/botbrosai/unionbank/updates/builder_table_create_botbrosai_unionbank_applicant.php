<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBotbrosaiUnionbankApplicant extends Migration
{
    public function up()
    {
        Schema::create('botbrosai_unionbank_applicant', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->integer('otp_code');
            $table->string('fname');
            $table->string('lname');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('botbrosai_unionbank_applicant');
    }
}
