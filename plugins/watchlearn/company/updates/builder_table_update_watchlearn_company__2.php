<?php namespace Watchlearn\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnCompany2 extends Migration
{
    public function up()
{
    Schema::table('watchlearn_company_', function($table)
    {
        $table->dropColumn('slug');
    });
}

public function down()
{
    Schema::table('watchlearn_company_', function($table)
    {
        $table->string('slug', 255)->nullable();
    });
}
}
