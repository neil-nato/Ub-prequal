<?php namespace BotbrosAi\UnionBank\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBotbrosaiUnionbankDownpayment extends Migration
{
    public function up()
    {
        Schema::rename('botbrosai_unionbank_', 'botbrosai_unionbank_downpayment');
        Schema::table('botbrosai_unionbank_downpayment', function($table)
        {
            $table->bigIncrements('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::rename('botbrosai_unionbank_downpayment', 'botbrosai_unionbank_');
        Schema::table('botbrosai_unionbank_', function($table)
        {
            $table->bigIncrements('id')->unsigned()->change();
        });
    }
}
