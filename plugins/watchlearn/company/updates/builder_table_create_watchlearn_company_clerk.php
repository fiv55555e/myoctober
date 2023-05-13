<?php namespace Watchlearn\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearnCompanyClerk extends Migration
{
    public function up()
{
    Schema::create('watchlearn_company_clerk', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('name');
        $table->integer('company_id');
        $table->integer('branch_id');
        $table->text('wallet');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('watchlearn_company_clerk');
}
}
