<?php namespace Watchlearn\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnCompanyLedger3 extends Migration
{
    public function up()
{
    Schema::table('watchlearn_company_ledger', function($table)
    {
        $table->text('order');
    });
}

public function down()
{
    Schema::table('watchlearn_company_ledger', function($table)
    {
        $table->dropColumn('order');
    });
}
}
