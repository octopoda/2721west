<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dailies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('day')->index()->unsigned();
			$table->string('image');
			$table->string('type');
			$table->boolean('published')->index()->unsigned();
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
		Schema::drop('dailies');
	}

}
