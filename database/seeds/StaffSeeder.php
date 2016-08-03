<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		DB::table('staff')->delete();

    Staff::create([
			'nama' => 'Ali Baba',
			'email' => 'ali@baba.com',
			'kad_pengenalan' => '808080-05-5555',
			'telefon' => '012-3455678',
			'alamat' => 'No. 123, Taman Maju Jaya, 70000 Seremban.',
			'role' => 'admin',
			'unit' => 'umum'
		]);

	}

}
