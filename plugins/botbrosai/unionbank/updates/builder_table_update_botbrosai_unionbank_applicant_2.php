<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBotbrosaiUnionbankApplicant2 extends Migration
{
    public function up()
    {
        Schema::table('botbrosai_unionbank_applicant', function($table)
        {
            $table->integer('prequalification_code');
        });
    }
    
    public function down()
    {
        Schema::table('botbrosai_unionbank_applicant', function($table)
        {
            $table->dropColumn('prequalification_code');
        });
    }
}
