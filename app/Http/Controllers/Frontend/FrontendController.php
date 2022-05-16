<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class FrontendController extends Controller
{
   // public function viewCategory($slug)
   //  {
   //      if (Category::where('slug',$slug)->exists())
   //       {
   //          $category = Category::where('slug',$slug)->first();
   //          $posts = Post::where('category_id',$category->id)->get();
   //          return view('frontend.categoryposts',compact('category','posts'));
   //      }else{
   //          return redirect('/')->with('Category Not Found ->>>> 404');
   //      }
   //  }
	// public function viewcategory($slug)
	// {
	// 	$posts = Post::all();
	// 	$categories = Category::where('slug', $slug)->first();
	// 	if ($categories) {
	// 		return view('frontend.categoryposts', compact('categories','posts'));
	// 	}else{
	// 		return redirect()->route('welcome');
	// 	}
	// }

	public function viewcategory($slug)
	{
		$category = Category::where('slug', $slug)->first();
		// dd($category->id);
		$posts = Post::where('category_id', $category->id)->get(); //Post Limiter---------limite()->
		return view('frontend.categoryposts',compact('posts'));
	}
	   public function show($id)
    {
         $post = Post::find($id);
         $categories = Category::all();
         return view('admin.post.view',compact('post','categories'));
    }




	  // public function show($id)
   //  {
   //       $post = Post::find($id);
   //       $categories = Category::all();
   //       return view('admin.post.view',compact('post','categories'));
   //  }



}
