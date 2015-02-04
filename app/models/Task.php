<?php

class Task extends \Eloquent {
	protected $fillable = ['name', 'slug'];

	public function topic()
	{
		return $this->belongsTo('Topic');
	}
}
