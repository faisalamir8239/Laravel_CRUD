<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index()
    {
        return view('insert');
    }

    public function store(Request $request)
    {
        $post=new Post;
        $post->post_title=$request->get('title');
        $post->post_author=$request->get('author');
        $post->save();

        return redirect('show');

        echo"<hl> Data saved successfully! </h1>";
    }

    public function show(Post $post)
    {
        $posts=Post::all();
        return view('show', ['posts'=>$posts]);
    }

    public function destroy(Post $post,$id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect('show');
    }

    public function edit(Post $post,$id)
    {
        $posts=Post::find($id);
        return view('edit',['posts'=>$posts]);
    }

    public function update(Request $request, Post $post,$id)
    {
        $posts=Post::find($id);
        $posts->post_title=$request->get('title');
        $posts->post_author=$request->get('author');

        $posts->save();
        return redirect('show');
    }
}
