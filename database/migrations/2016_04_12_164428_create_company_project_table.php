<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_project', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id')->index()->unsigned();
			$table->integer('project_id')->index()->unsigned();
			$table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
			$table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_project');
	}

}
