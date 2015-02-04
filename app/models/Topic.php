<?php

class Topic extends \Eloquent {
	protected $fillable = ['name', 'slug'];

	public function tasks()
	{
		return $this->hasMany('Task') ->orderBy("list_order");;
	}
}
