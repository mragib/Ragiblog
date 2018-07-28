<?php

namespace App;
use Carbon\Carbon;

class Post extends Model
{
    public function comment()
    {
    	return $this->hasMany(Comment::class);
    }

    //from commentsController call addcomment 

    public function addComment($body)
    {

//Easy way
/*    	Comment::create([

    		'body'=> request('body'),
    		'post_id'=> $this->id

    	]);*/

    	//elequent way which make more clean
    	$this->comment()->create(compact('body'));
    }

        public function user()
    {
    	return $this->belongsTo(User::class);
    }


    public function scopeFilter($query,$filters)
    {

        if (isset($filters['month']))
        {
            $query->whereMonth('created_at',Carbon::parse($month)->month);
        }

        if(isset($filters['year']))
        {
            $query->whereYear('created_at',$year);
        }

       
    }

    public static function archives()
    {
       return static:: selectRaw('year(created_at) as year, monthname(created_at) as month,COUNT(*) as publish')
         ->groupBy('year','month')
         ->orderByRaw('min(created_at) desc')
         ->get()
         ->toArray();
    }
}
