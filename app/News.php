<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class News extends Model
{
	protected $table = ['news'];
	protected $fillable = ['title', 'segment','content','published_at'];
	protected $dates = ['deleted_at'];

}
