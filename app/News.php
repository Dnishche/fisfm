<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class News extends Model
{
	protected $table = ['news'];

	/*public function newsForHome()
    {

        $news_for_home = News::orderBy('date_create','desc')->where('date_create','<=',Carbon::now())->take(4)->get();

        return $news_for_home;
    }*/
}
