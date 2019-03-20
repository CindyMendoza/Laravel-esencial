<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	function author()
	{
		return $this->belongsTo('App\Author');
	}
}
