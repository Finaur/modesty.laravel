<?php

use M_news;
use M_tags;
use t_tagsNews;

class TagsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tags = M_tags::orderBy('tags_id','=','DESC')->paginate(5);

		return View::make('backend.tags.indexTags')
				->with('tags', $tags);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id = NULL)
	{
		$tags = M_tags::all();

		return View::make('backend.tags.createTags')
					->with('tags', $tags)
					->with('id', $id);
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//Rule of validation
		$rules = array(
			'tags_name'		=> 'required'
		);

		//custom message
		$message = array(
			'tags_name.required'	=> 'please, fill the tags name'
			);

		$validator = Validator::make(Input::all(), $rules, $message);

		if ($validator->fails()){
			return Redirect::back() // automaticly redirect to her self
				->withErrors($validator);
		}

		else{
			$tags 				= new M_tags;
			$tags->tags_name    = Input::get('tags_name');
			$tags->save();
			
			$from = Input::get('from');
			if($from != null){
				return Redirect::to($from .'/create');
			}
			// redirect
			Session::flash('message', 'Successfully created tags');
			return Redirect::to('tags');
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
		$tags = M_tags::find($id);

		return View::make('backend.tags.showTags')
					->with('tags', $tags);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tags = M_tags::find($id);

		return View::make('backend.tags.editTags')
				->with('tags', $tags);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'tags_name'		=> 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()){
			return Redirect::to('tags') // automaticly redirect to her self
				->withErrors($validator);
		}

		else{
			$tags 					= M_tags::find($id);
			$tags->tags_name    	= Input::get('tags_name');
			$tags->save();

			// redirect
			Session::flash('message', 'Successfully update category');
			return Redirect::to('tags');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tags = M_tags::find($id);
		$tags->delete();

		// redirect
		Session::flash('message', 'Successfully deleted tags!');
		return Redirect::to('tags');
	}


}
