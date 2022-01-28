<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  
    private $path = 'thumbnails';

    public function index()
    {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }


    public function create()
    {
        return view('posts.create');
    }

  
    public function store(Request $request)
    {
       $fileName = $request->file('thumbnail')
            ->storeAs(
                $this->path,
                    time() . "." . $request->file('thumbnail')->getClientOriginalExtension() ,
                    'public'
            );
        Post::create(
            [
                'title' => $request->title,
                'thumbnail' => $fileName,
                'content' => $request->content

            ] 
        );
        return redirect()->route('posts.index');

    }

   
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

  
    public function edit(Post $post)
    {
        //
    }

   
    public function update(Request $request, Post $post)
    {
        //
    }

    
    public function destroy(Post $post)
    {
        //
    }
}
