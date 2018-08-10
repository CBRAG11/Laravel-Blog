<?php

namespace App;
use Carbon\Carbon;

class Post extends Model
{
   public function comments()
   {
   		return $this->hasMany(Comment::class);
   }

   public function addComments($body)
   {		
   			 // $this->comments()->create(compact('body'));
   			Comment::create([
   			'post_id' => $this->id,
   			'body'=>$body,
        'user_id' => auth()->id()
   			]);
   }

    public function user()
   {
   		return $this->belongsTo(User::class);
   }

   public function scopeFilter($query, $filters)
   {      
         if (isset($filters['month'])) {

            $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
        }
        
        if (isset($filters['year'])) {

            $query->whereYear('created_at', $filters['year']);
        }

      // dd($posts);
   }


   public static function archives(){
      return static::selectRaw('year(created_at) as year, monthname(created_at) as month, count(*) published')
      ->groupBy('year', 'month')->orderByRaw('min(created_at)')
      ->get();
   }
}
