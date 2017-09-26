<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDayPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('day_posts', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk_db_posts_db_users')->references('id')->on('day_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('day_posts', function(Blueprint $table)
		{
			$table->dropForeign('fk_db_posts_db_users');
		});
	}

}
