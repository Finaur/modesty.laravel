<?php

use User;

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = User::all();

		return View::make('backend.users.usersIndex')
					->with('user', $user);

	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('backend.users.createUser');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		
		$rules = array(
			'full_name'		=> 'required|unique:m_users',
			'user_name' 	=> 'required|unique:m_users',
			'user_email'	=> 'required',
			'password1' 	=> 'required|min:8',
			'password'		=> 'required|same:password1',
			'user_image'	=> 'required'
		);
		//custom message
		$message = array(
			'full_name.required'	=> 'please, fill the full name',
			'user_name.required'	=> 'please, fill the user name',
			'user_email.required'	=> 'please, fill the email',
			'password.required'		=> 'please, fill the password'
			
			);

		$valid_image_exts = array('jpeg', 'jpg', 'png', 'gif');
		$max_size = 2000 * 1024; // max file size (200kb)
    	
    	//$fileName = NULL;

		$validator = Validator::make(Input::
											all(), 
											$rules, 
											$message, 
											$valid_image_exts,
											$max_size
											
									);

		// process the login
		if ($validator->fails()) {
			//return Redirect::to('news') //can use this or
			return Redirect::back() // automaticly redirect to her self
				->withErrors($validator);
		} else {
			// store
			//$tags_news 		= M_tags::all();
			$file = Input::file('user_image');
			$path = public_path() . '/assets/image/'; // upload directory
			$filename = $file->getClientOriginalName();


			$user 				= new User;
			$user->full_name    = Input::get('full_name');
			$user->user_name    = Input::get('user_name');
			$user->user_email 	= Input::get('user_email');
			$user->password 	= Hash::make(Input::get('password'));
			$user->user_status 	= Input::get('user_status');
			$user->user_image	= $filename;//->move($path, $filename);

			$uploadSuccess   = $file->move($path, $filename);
			$user->save();
			
			Session::flash('message', 'Successfully created User');
			return Redirect::to('user');
		}
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
