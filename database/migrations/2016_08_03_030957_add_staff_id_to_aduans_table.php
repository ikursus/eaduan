<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStaffIdToAduansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('aduans', function(Blueprint $table)
		{
			$table->integer('staff_id')->after('pengadu_id');
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
			$table->dropColumn('staff_id');
		});
	}

}
