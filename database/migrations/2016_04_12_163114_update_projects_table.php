<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('projects', function ($table) {
   		 	$table->dropColumn('role');
   		 	$table->dropColumn('description');
   		 	$table->dropForeign('projects_project_type_id_foreign');
        	$table->dropColumn('project_type_id');
        	$table->string('project_image');
   		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$table->string('role')->nullable();
        $table->text('description')->nullable();
        $table->integer('project_type_id')->index()->unsigned();
        $table->foreign('project_type_id')->references('id')->on('project_types');
        $table->dropColumn('project_image');
	}

}
