<?php namespace Watchlearn\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnCompanyBranch extends Migration
{
    public function up()
{
    Schema::table('watchlearn_company_branch', function($table)
    {
        $table->string('slug')->nullable();
    });
}

public function down()
{
    Schema::table('watchlearn_company_branch', function($table)
    {
        $table->dropColumn('slug');
    });
}
}
