<?php namespace Watchlearn\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearnCompany extends Migration
{
    public function up()
{
    Schema::create('watchlearn_company_', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('name');
        $table->text('address');
        $table->string('username');
        $table->text('password');
    });
}

public function down()
{
    Schema::dropIfExists('watchlearn_company_');
}
}
