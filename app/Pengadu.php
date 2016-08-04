<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengadu extends Model {

	protected $table = 'pengadus';

	protected $fillable = array(

		'nama',
		'email',
		'alamat',
		'telefon'

	);

}
