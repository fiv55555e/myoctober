<?php namespace Watchlearn\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearnCompanyBranch extends Migration
{
    public function up()
{
    Schema::create('watchlearn_company_branch', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('name');
        $table->integer('company_id');
        $table->text('address');
    });
}

public function down()
{
    Schema::dropIfExists('watchlearn_company_branch');
}
}
