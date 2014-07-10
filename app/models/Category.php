<?php
class Category extends Eloquent {
	protected $filltable = array('name');

	public static $rules = array('name'=>'required|min:3');

	public function products(){
		return $this->hasMany('Product');
	}
}