<?php

/*
	using standart controller and  Group Routing
*/

use M_category;
use M_news;
use t_tagsNews;


class CategoryController extends BaseController {

	public function getIndex(){

		$category = M_category::paginate(10);
		return View::make('backend.category.index')
					->with('category', $category);
	}

	public function create(){

		return View::make('backend.category.createCategory');
	}

	public function insert(){

		//Rule of validation
		$rules = array(
			'category_name'		=> 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()){
			return Redirect::back() // automaticly redirect to her self
				->withErrors($validator);
		}

		else{
			$category = new M_category;
			$category->category_name       = Input::get('category_name');
			$category->save();

			// redirect
			Session::flash('message', 'Successfully created category');
			return Redirect::to('category');
		}
	}

	public function show($id){

		$category = M_category::find($id);
		$news 	  = M_news::where('category_id', '=', $id)->paginate('10'); 

		//echo "<pre>"; dd($news); echo "</pre>";

		return View::make('backend.category.showCategory')
					->with('category', $category)
					->with('news', $news);
	}

	public function edit_category($id){

		//to use the class of M_category
		$category = M_category::find($id);

		return View::make('backend.category.updateCategory')
				->with('category', $category);
	}

	public function update_category($id){
		//die('xxx');
		//Rule of validation
		$rules = array(
			'category_name'		=> 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()){
			return Redirect::to('category') // automaticly redirect to her self
				->withErrors($validator);
		}

		else{
			$category 					= M_category::find($id);
			$category->category_name    = Input::get('category_name');
			$category->save();

			// redirect
			Session::flash('message', 'Successfully update category');
			return Redirect::to('category');
		}
	}

	public function delete($id)
	{
		
		$category 	= M_category::find($id);

		if($category == true) {
			$news 		= M_news::where('category_id', '=', $id)->delete();
			$category->delete();
		}
		
		// redirect
		Session::flash('message', 'Successfully deleted category!');
		return Redirect::to('category');
	}
}