<?php
/*
	this controller using the Resource Router.

*/
//to call the class
use M_news;
use M_category;
use M_tags;
use t_tagsNews;

class NewsController extends BaseController {

	

	public function index(){
		$news = M_news::paginate(10);

		return View::make('backend.news.listNews')
				->with('news', $news);
	}

	public function create()
	{
		$category_news 	= M_category::all();
		$tags_news 		= M_tags::all();
		// load the create form (app/views/nerds/create.blade.php)
		return View::make('backend.news.insertNews')
					->with('category_news', $category_news)
					->with('tags_news', $tags_news);
	}

	public function store(){
		
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'news_title'		=> 'required',
			'summary_news'      => 'required',
			'content_news' 		=> 'required'
			
		);

		//custom message
		$message = array(
			'news_title.required'	=> 'please, fill the title news',
			'summary_news.required'	=> 'please, fill the summary news',
			'content_news.required'	=> 'please, fill the content news'
			
			);
		$validator = Validator::make(Input::all(), $rules, $message);

		// process the login
		if ($validator->fails()) {
			//return Redirect::to('news') //can use this or
			return Redirect::back() // automaticly redirect to her self
				->withErrors($validator);
		} else {
			// store
			//$tags_news 		= M_tags::all();
			$news 					= new M_news;
			$news->title_news       = Input::get('news_title');
			$news->summary_news     = Input::get('summary_news');
			$news->content_news 	= Input::get('content_news');
			$news->category_id 		= Input::get('category_id');
			//$news->save();

			if($news->save()){ 
				
				$tags_select = Input::get('tags_id');
				
				foreach ($tags_select as $key => $value) {
					$tags = new t_tagsNews;
					$tags->tags_id = $value;
					$tags->news_id = $news->news_id;

					$tags->save();
				}
			}

			// redirect
			Session::flash('message', 'Successfully created News');
			return Redirect::to('news');
		}
	}

	public function show($id){

		$news = M_news::find($id);
	
		return View::make('backend.news.showNews')
				->with('news', $news);
	}

	public function edit($id){

		//to use the class of M_news
		$news 			= M_news::find($id);
		$category_news 	= M_category::all();
		$tags_news 		= M_tags::all();

		return View::make('backend.news.editNews')
				->with('news', $news)
				->with('category_news', $category_news)
				->with('tags_news', $tags_news);
	}

	public function update($id){

		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'news_title'		=> 'required',
			'summary_news'      => 'required',
			'content_news' 		=> 'required',
		);

		//custom message
		$message = array(
			'news_title.required'	=> 'harus diisi'
			);
		$validator = Validator::make(Input::all(), $rules, $message);

		// process the login
		if ($validator->fails()) {
			//return Redirect::to('news') //can use this or
			return Redirect::back() // automaticly redirect to her self
				->withErrors($validator);
		} else {
			// store
			$news = M_news::find($id);
			$news->title_news       = Input::get('news_title');
			$news->summary_news     = Input::get('summary_news');
			$news->content_news 	= Input::get('content_news');
			$news->category_id 		= Input::get('category_id');

			$news->save();

			if($news->save()){ 
				$tags = t_tagsNews::where('news_id', '=',$id)->delete();

				$tags_select = Input::get('tags_id');
				
				foreach ($tags_select as $key => $value) {
					$tags = new t_tagsNews;
					//echo "<pre>"; dd($tags); echo"</pre>"; die();
					//$tags = t_tagsNews::find($value);
					//echo "<pre>"; dd($tags); echo"</pre>"; die();
					$tags->tags_id = $value;
					$tags->news_id = $news->news_id;
					$tags->save();
				}
			}
			// redirect
			Session::flash('message', 'Successfully Updated News');
			return Redirect::to('news');
		}
	}

	public function destroy($id)
	{
		// delete
		$news = M_news::find($id);
		$news->delete();

		// redirect
		Session::flash('message', 'Successfully deleted News!');
		return Redirect::to('news');
	}

}