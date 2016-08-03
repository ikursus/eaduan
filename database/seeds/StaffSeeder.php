<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StaffSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		DB::table('staff')->delete();

		// Staff 1
    Staff::create([
			'nama' => 'Ali Baba',
			'email' => 'ali@baba.com',
			'kad_pengenalan' => '808080-05-5555',
			'telefon' => '012-3455678',
			'alamat' => 'No. 123, Taman Maju Jaya, 70000 Seremban.',
			'role' => 'admin',
			'unit' => 'umum'
		]);

		// Staff 2
    Staff::create([
			'nama' => 'Ahmad Albab',
			'email' => 'ahmad@albab.com',
			'kad_pengenalan' => '999999-05-5555',
			'telefon' => '012-8765432',
			'alamat' => 'No. 123, Taman Sentiasa Maju, 70000 Seremban.',
			'role' => 'user',
			'unit' => 'kewangan'
		]);

	}

}
