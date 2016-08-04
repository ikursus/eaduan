<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Aduan extends Model {

	protected $table = 'aduans';

	protected $fillable = array(

		'pengadu_id',
		'staff_id',
		'sabjek',
		'kandungan',
		'tarikh',
		'status',
		'kategori',
		'lampiran'

	);

}
