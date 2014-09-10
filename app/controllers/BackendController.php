<?php

class BackendController extends BaseController {


	public function getIndex()
	{
		

			return View::make('backend.pages.home');

		
	}

	public function demoForm()
	{
		return View::make('backend.pages.form');
	}	

	public function demoTable()
	{
		return View::make('backend.pages.table');
	}

	public function login()
	{
		return View::make('backend.pages.login');
	}

}
