<?php namespace Watchlearn\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnCompanyLedger extends Migration
{
    public function up()
{
    Schema::table('watchlearn_company_ledger', function($table)
    {
        $table->decimal('amount', 10, 2)->change();
    });
}

public function down()
{
    Schema::table('watchlearn_company_ledger', function($table)
    {
        $table->decimal('amount', 10, 0)->change();
    });
}
}
