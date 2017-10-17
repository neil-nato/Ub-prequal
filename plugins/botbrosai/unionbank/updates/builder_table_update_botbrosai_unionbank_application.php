<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBotbrosaiUnionbankApplication extends Migration
{
    public function up()
    {
        Schema::table('botbrosai_unionbank_application', function($table)
        {
            $table->bigIncrements('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('botbrosai_unionbank_application', function($table)
        {
            $table->bigIncrements('id')->unsigned()->change();
        });
    }
}
