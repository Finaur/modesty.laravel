<?php

	class M_news extends Eloquent
	{
		protected $primaryKey ='news_id';
		
		/*One to many Reletionship*/
		public function category(){

			return $this->belongsTo('M_category','category_id');
		}	

		public function tags(){

			return $this->belongsToMany('M_tags', 't_tagsNews','news_id','tags_id');
		}
	}