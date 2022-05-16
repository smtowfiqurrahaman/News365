<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();
       
        $leftPost = $posts->splice(0,1);
        $rightPost = $posts->splice(0,4);
        $posta = $posts->splice(0,4);
        $news = $posts->splice(0);
        

        $categories = Category::all();
        return view('welcome', compact('posts','categories', 'leftPost', 'rightPost','news','posta'));
    }

    
}
