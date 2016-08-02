<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function homepage()
	{

		$page_title = 'Utama';

	  // Response return text
	  //return 'Halaman Homepage';

	  // Response return template homepage
	  // function view() berfungsi cari folder resources/views
	  return view('homepage', compact('page_title') );

	}

	public function tq()
	{
		$page_title = 'Terima Kasih';

	  return view('terima-kasih', compact('page_title') );
	}

	public function admin()
	{
		return redirect('/admin/dashboard');
	}

	public function dashboard()
	{
		$page_title = 'Dashboard Admin';

    // View akan cari template dashboard dalam resources/views/admin
    return view('admin/dashboard', compact('page_title') );
	}

}
