<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Carbon\Carbon;
use App\Repositories\Posts;

class PostsController extends Controller
{
   public function __construct()
   {
         // $this->middleware('auth');
   }
   
   public function index()
   {
      return view('posts.index');
   }

   public function show(Post $post)
   {  
      //dd($post);
      //$post = Post::find($id);
      return view('posts.show',  compact('post'));
   }

   public function blog(Posts $posts)
   {  
       $posts = $posts->all();      

      // $posts = Post::latest()
      //          ->filter(request(['month', 'year']))
      //          ->get();
     
      //  // dd($posts);

      //    if($month == request('month'))
      //    {
      //       $posts->whereMonth('created_at', Carbon::parse($month)->month);
      //    }

        
      //    if($year == request('year'))
      //    {
      //       $posts->whereMonth('created_at', $year);
      //    }

      //    $posts = $posts->get();
      
      // dd($posts);

      $archives = Post::archives();

      return view('posts.blog', compact('posts', 'archives'));
   }

   public function create()
   {
         return view('posts.create');
   }

  
   public function store()
   {

         $this->validate(request(),[
            'title' => 'min:1',
            'body'   => 'min:5'
         ]);


         auth()->user()->publish( new Post(request([
         'title', 'body', 'user_id'
         ])));


        
         
         

         // if(!$errors){
            
            
         // }

         // $post = new Post();

         // $post->title = request('title');

         // $post->body = request('body');

         // $post->save();

         return redirect('/Posts/Blog');
   }


   // public function update()
   // {
   //       $post = new Post();

   //       $post->title = request('title');

   //       $post->body = request('body');

   //       $post->save();

   //       return redirect('/Posts');
   // }
}
