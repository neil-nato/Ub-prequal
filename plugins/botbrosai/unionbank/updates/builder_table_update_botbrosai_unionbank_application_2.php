<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBotbrosaiUnionbankApplication2 extends Migration
{
    public function up()
    {
        Schema::table('botbrosai_unionbank_application', function($table)
        {
            $table->string('ref_num');
        });
    }
    
    public function down()
    {
        Schema::table('botbrosai_unionbank_application', function($table)
        {
            $table->dropColumn('ref_num');
        });
    }
}
