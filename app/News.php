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

	public function getNewsForHome()
    {
        return News::orderBy('published_at','desc')->
                      where('published_at','<=',Carbon::now())->take(3)->get();
    }
}
