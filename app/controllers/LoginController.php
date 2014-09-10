<?php

use User;
class LoginController extends BaseController {

	function getIndex(){

		return View::make('backend.login.signin');
	}

	public function login() {

		$rules = array(
			'user_name'		=> 'required',
			'password'      => 'required'
		);

		$message = array(
				'user_name.required' => 'username must be entered',
				'password.required' => 'password must be entered'
			);

		$validator = Validator::make(Input::all(), $rules, $message);

		if($validator->fails()){

			return Redirect::back() // automaticly redirect to her self
				->withErrors($validator);
		}

		else {
				$user_data = array(
									'user_name' => Input::get('user_name'),
									'password'  => Input::get('password')
								);

				$remember = (Input::has('remember')) ? true : false;

				if (Auth::attempt($user_data, $remember)) {

					if (Auth::viaRemember($remember))
						{
							return $value = Cookie::get('user_name');
						}
					// echo 'SUCCESS!';
					Session::flash('message', 'Successfully Login!');
		    		return Redirect::to('backend');
		    
				} 

				else {

					Session::flash('message', 'Your username/password combination was incorrect');
		    		return Redirect::to('login');
					}
             }
	}

	public function logout(){

		Auth::logout(); // log the user out of our application
		Session::flush();
		return Redirect::to('login');
	}

}
