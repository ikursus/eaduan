<?php namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use Illuminate\Contracts\Auth\Guard;
// use Illuminate\Contracts\Auth\Registrar;
// use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	// use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	// public function __construct(Guard $auth, Registrar $registrar)
	// {
	// 	$this->auth = $auth;
	// 	$this->registrar = $registrar;
	//
	// 	$this->middleware('guest', ['except' => 'getLogout']);
	// }

	public function authenticate( Request $request )
	{
		$email = $request->input('email');
		$password = $request->input('password');

		if ( Auth::attempt( ['email' => $email, 'password' => $password ] ) )
		{
			$user = Auth::user();

			// Jika berjaya login, redirect ke panel admin
			return redirect()->intended('admin');
		}
		// Jika tak berjaya, redirect kembali ke halaman sebelum
		return redirect()->back()->with('error', 'Login tak sah!');
	}

	public function logout()
	{

		if( Auth::check() )
		{
			Auth::logout();
		}

		return redirect('login');
	}

}
