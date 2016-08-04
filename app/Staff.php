<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Staff extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

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

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

}
