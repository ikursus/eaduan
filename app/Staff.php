<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model {

	// Nama table yang diuruskan oleh Model Staff.php ini
	protected $table = 'staff';

	// Berfungsi untuk protect data entry ke dalam table
	protected $fillable = array(

		'nama',
		'password',
		'email',
		'tarikh_lahir',
		'kad_pengenalan',
		'telefon',
		'alamat',
		'role',
		'unit'

	);

}
