<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller {

	public function getSignUp(){
		return view('auth.signup');	
	}
	
	public function postSignUp(Request $request){
		$this->validate($request, [
				'email' => 'required|unique:users|email|max:255',
				'username' => 'required|unique:users|alpha_dash|max:20',
				'password' => 'required|min:6'
			]);	
		User::create([
			'email' => $request->input('email'),
			'username' => $request->input('username'),
			'password' => bcrypt($request->input('password')),
			]);
			
		return redirect()
			->route('welcome')
			->with('info','Your account has been created!');	
	}

}
?>