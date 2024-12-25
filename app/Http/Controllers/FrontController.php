<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class FrontController extends Controller
{
   public function blog()
   {
      $posts = Post::orderBy('id','DESC')->paginate(12);
      //var_dump($posts);
      return view('front.blog', compact('posts'));
   }
      public function post($id)
   {
      // echo $id;
      $post = Post::find($id);
      // var_dump($post);
      return view('front.post', compact('post'));
   }
}
