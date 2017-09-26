<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDayCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('day_comments', function(Blueprint $table)
		{
			$table->foreign('post_id', 'fk_db_comments_db_posts1')->references('id')->on('day_posts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_db_comments_db_users1')->references('id')->on('day_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('day_comments', function(Blueprint $table)
		{
			$table->dropForeign('fk_db_comments_db_posts1');
			$table->dropForeign('fk_db_comments_db_users1');
		});
	}

}
