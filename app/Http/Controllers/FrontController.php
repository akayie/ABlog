<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
   public function blog()
   {
      // $posts = Post::all();
      $posts = Post::orderBy('id','DESC')->paginate(4);
      //var_dump($posts);
      $feature_post=Post::orderBy('id','DESC')->Limit(1)->first();

      return view('front.blog', compact('posts','feature_post'));
   }
  

      public function post($id)
   {
      // echo $id;
      $post = Post::find($id);
      // var_dump($post);
      $category_id=$post->category_id;
      $feature_posts=post::where('category_id',$category_id)->orderBy('id','DESC')->Limit(4)->first();
      
    return view('front.post',compact('post',));
   //     return view('front.post',compact('post','related_posts'));   }

   }
}
