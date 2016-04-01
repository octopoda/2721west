<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index();
            $table->integer('project_type_id')->index()->unsigned();
            $table->foreign('project_type_id')->references('id')->on('project_types');
            $table->string('role')->nullable();
            $table->text('description')->nullable();
            $table->string('url')->index();
            $table->integer('published')->index()->unsigned();
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
		Schema::drop('projects');
	}

}
