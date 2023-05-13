<?php namespace Watchlearn\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnCompanyBranch4 extends Migration
{
    public function up()
{
    Schema::table('watchlearn_company_branch', function($table)
    {
        $table->dropColumn('slug');
    });
}

public function down()
{
    Schema::table('watchlearn_company_branch', function($table)
    {
        $table->text('slug')->nullable();
    });
}
}
