<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDbPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('db_posts', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('user_id', 36)->index('fk_db_posts_db_users_idx');
			$table->string('post_title');
			$table->string('post_url')->nullable();
			$table->text('post_text', 65535);
			$table->string('path')->nullable();
			$table->string('mime_type')->nullable();
			$table->integer('size')->nullable();
			$table->integer('width')->nullable();
			$table->integer('height')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('db_posts');
	}

}
