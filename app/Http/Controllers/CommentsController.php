<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    
   public function store(Post $post)
   {	
   // {echo" <pre>";
   // print_r($post);
   // 	echo "</pre>";exit;
         $this->validate(request(), ['body' => 'required|min:2']);
   		$post->addComments(request('body'));
   		
   		// $post = new Post();

   		// $post->title = request('title');

   		// $post->body = request('body');

   		// $post->save();

   		return back();
   }
}
// this is right
