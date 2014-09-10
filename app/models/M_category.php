<?php

	class M_category extends Eloquent
	{
		//define table name
		protected $table 		= 'm_category';
		protected $primaryKey 	= 'category_id';

		/*One to many Reletionship*/
		public function news(){

			return $this->hasMany('M_news','news_id');
		}
	}