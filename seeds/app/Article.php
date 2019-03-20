<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

	protected $guarded = ['name','text','views'];

    
}
