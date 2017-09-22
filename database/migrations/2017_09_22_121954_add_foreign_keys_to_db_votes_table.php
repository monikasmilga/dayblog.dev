<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDbVotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('db_votes', function(Blueprint $table)
		{
			$table->foreign('post_id', 'fk_db_votes_db_posts1')->references('id')->on('db_posts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_db_votes_db_users1')->references('id')->on('db_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('db_votes', function(Blueprint $table)
		{
			$table->dropForeign('fk_db_votes_db_posts1');
			$table->dropForeign('fk_db_votes_db_users1');
		});
	}

}
