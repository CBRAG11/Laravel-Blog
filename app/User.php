<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
   public function posts()
   {
        return $this->hasMany(Post::class);
   }

   public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function publish(Post $post)
   {
         $this->posts()->save($post);
         //or follow the bellow method 
         //Post::create([
         //     'body' => request('body'),
         //     'title' => request('title'),
         //     'user_id' => auth()->id()
         // ]);    
   }

}
