<?php

class M_tags extends Eloquent{

	protected $table 		='m_tags';
	protected $primaryKey   ='tags_id';

	public function news(){

		return $this->belongsToMany('M_news', 't_tagsNews','tags_id', 'news_id');
	}
}