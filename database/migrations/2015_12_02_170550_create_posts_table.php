<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')->index()->unique();
			$table->text('content');
			$table->text('searchable');
            $table->text('summary');
            $table->datetime('publish_date')->index();
            $table->tinyInteger('draft')->index()->unsigned();
            $table->string('direct_link')->unique();
            $table->string('post_image');
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
		Schema::drop('posts');
	}

}
