<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('companies', function ($table) {
   		 	$table->dropColumn('first_name');
   		 	$table->dropColumn('last_name');
   		 	$table->dropColumn('email');
   		 	$table->text('message');
   		 	$table->integer('archived');
   		 });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('companies', function ($table) {
   		 	$table->dropColumn('message');
   		 	$table->dropColumn('archived');
   		 	$table->string('first_name');
			$table->string('last_name');
			$table->string('email')->index();
		});
	}

}
