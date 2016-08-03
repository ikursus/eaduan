<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$page_title = 'Senarai Staff';

		// Query semua rekod dalam table staff
		// $senarai_staff = Staff::where('email', '=', 'ali@baba.com')->take(5)->get();

		// Panggil 1 row data
		// $senarai_staff = Staff::find(1);
		// $senarai_staff = Staff::where('email', '=', 'ahmad@albab.com')->first();

		$senarai_staff = Staff::paginate(10);

		// View akan cari template dashboard dalam resources/views/admin
    return view('admin/staff', compact('page_title', 'senarai_staff') );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$page_title = 'Tambah Staff';

		// View akan cari template dashboard dalam resources/views/admin
    return view('admin/staff-create', compact('page_title') );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store( Request $request )
	{
		// Dapatkan semua data yang dihantar dari borang
		$inputs = $request->all();

		// Simpan data ke dalam table staff
		Staff::create( $inputs );

		// Redirect ke senarai staff
		return redirect('admin/staff');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$page_title = 'Maklumat Staff';

    // View akan cari template dashboard dalam resources/views/admin
    return view('admin/staff-detail', compact('page_title') );
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
