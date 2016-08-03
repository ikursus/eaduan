<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAduansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aduans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sabjek');
			$table->text('kandungan');
			$table->date('tarikh');
			$table->enum('status', array('diterima', 'ditolak', 'diproses', 'selesai'));
			$table->string('kategori');
			$table->string('lampiran');
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
		Schema::drop('aduans');
	}

}
