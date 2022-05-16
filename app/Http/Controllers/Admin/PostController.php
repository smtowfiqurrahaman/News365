<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Carbon\carbon;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $posts = Post::all();
         $categories = Category::all();
        return view('admin.post.create',compact('posts','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category' =>'required',
            'name' => 'required',
            'artical' => 'required',
            'image' =>'required'
         ]);

        $image = $request->file('image');
        $slug = Str::slug($request->name);


        $post = new Post();
        $post->name = $request->name;

        if (isset($image)) {
           $currentDate = Carbon::Now()->toDateString();
           $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();

           if (!file_exists('uploads/post')) {
               mkdir('uploads/post', 007, true);
           }
         $image->move('uploads/post', $imagename);
       }else{
        $imagename = 'default.png';
       }

        $post = new Post();
        $post->category_id = $request->category;
        $post->name = $request->name;
        $post->artical = $request->artical;
        $post->image = $imagename;

        $post->save();
        return redirect()->route('post.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $post = Post::find($id);
         $categories = Category::all();
         return view('admin.post.view',compact('post','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'category' =>'required',
            'name' => 'required',
            'artical' => 'required'
           
         ]);

        $post = Post::find($id);
        $image = $request->file('image');
        $slug = Str::slug($request->name);

        $post->name = $request->name;

        if (isset($image)) {
           $currentDate = Carbon::Now()->toDateString();
           $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();

           if (!file_exists('uploads/post')) {
               mkdir('uploads/post', 077, true);
           }
         $image->move('uploads/post', $imagename);
       }else{
        $imagename = $post->image;
       }

        // $post = new Post();
        $post->category_id = $request->category;
        $post->name = $request->name;
        $post->artical = $request->artical;
        $post->image = $imagename;

        $post->save();
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if (file_exists('uploads/post/'.$post->image)) {
          unlink('uploads/post/'.$post->image);
        }
        $post->delete();
        return redirect()->route('post.index');
        
    }
}
