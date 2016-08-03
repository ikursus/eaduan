<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPengaduIdToAduansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('aduans', function(Blueprint $table)
		{
			$table->integer('pengadu_id')->after('id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('aduans', function(Blueprint $table)
		{
			$table->dropColumn('pengadu_id');
		});
	}

}
