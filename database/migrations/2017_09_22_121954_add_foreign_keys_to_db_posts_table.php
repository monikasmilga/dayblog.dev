<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDbPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('db_posts', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk_db_posts_db_users')->references('id')->on('db_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('db_posts', function(Blueprint $table)
		{
			$table->dropForeign('fk_db_posts_db_users');
		});
	}

}
