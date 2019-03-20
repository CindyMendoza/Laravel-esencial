<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

	function article()
	{
		return $this->hasOne('App\Article');
	}

	function phones()
	{
		return $this->hasMany('App\Phone');
	}
	
}
