<?php namespace Watchlearn\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearnCompanyLedger extends Migration
{
    public function up()
{
    Schema::create('watchlearn_company_ledger', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->integer('company_id');
        $table->integer('branch_id');
        $table->decimal('amount', 10, 0);
        $table->text('wallet');
        $table->text('details');
    });
}

public function down()
{
    Schema::dropIfExists('watchlearn_company_ledger');
}
}
