<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Aduan;
use App\Pengadu;
use App\Staff;

class BorangController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$page_title = 'Borang Aduan';

	  return view('borang-aduan', compact('page_title') );
	}

	public function login()
	{
		$page_title = 'Login Admin';

	  return view('login', compact('page_title') );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function aduan()
	{
		$page_title = 'Borang Aduan';

		return view('borang-aduan', compact('page_title'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function hantarAduan( Request $request )
	{
		// Data untuk table pengadu
		$dataPengadu = $request->only('nama', 'email', 'alamat', 'telefon' );

		// Simpan data pengadu ke dalam table
		$pengadu = Pengadu::create( $dataPengadu );

		// Dapatkan info staff yang mempunyai role admin.
		$staff = Staff::where('role', '=', 'admin')->first();

		// Data untuk table aduan
		$aduan = new Aduan;
		$aduan->pengadu_id = $pengadu->id;
		$aduan->staff_id = $staff->id;
		$aduan->sabjek = $request->input('sabjek');
		$aduan->kandungan = $request->input('kandungan');
		$aduan->tarikh = $request->input('tarikh');
		$aduan->status = 'diterima';
		$aduan->kategori = $request->input('kategori');

		// Simpan file attachment jika ada lampiran
		if( $request->hasFile('lampiran') )
		{
			// Dapatkan fail lampiran
			$file = $request->file('lampiran');
			// Rename nama fail dengan memasukka timestamp
			$new_file_name = time() . $file->getClientOriginalName();
			// Pindahkan fail yang direname ke direktori public/upload
			$file->move( public_path('upload'), $new_file_name );
			// Simpan nama fail ke dalam table
			$aduan->lampiran = $new_file_name;
		}
		// Simpan semua data ke dalam table.
		$aduan->save();

		// Selesai semua, redirect pengadu ke halaman utama
		return redirect('/')->with('success', 'Terima kasih kerana mengadu.');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
