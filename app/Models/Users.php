<?php

namespace App\Models;

use Cartalyst\Sentinel\Users\EloquentUser;

class Users extends EloquentUser
{
    /**
	* The Eloquent posts model name
	* 
	* @var string
	*/
	
	protected static $postsModel = 'App\Models\Post';
	
	/**
	* The Eloquent comments model name
	* 
	* @var string
	*/
	
	protected static $commentsModel = 'App\Models\Comment';
	
	/**
	* Returns the posts relationship
	* 
	* @return \Illuminate\Datebase\Eloquent\Relations\HasMany
	*/
	
	public function posts()
	{
		return $this->hasMany(static::$postsModel, 'user_id');
	}
	
	/**
	* Returns the comments relationship
	* 
	* @return \Illuminate\Datebase\Eloquent\Relations\HasMany
	*/
	
	public function comments()
	{
		return $this->hasMany(static::$commentsModel, 'user_id');
	}
}
