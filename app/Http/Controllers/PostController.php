<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
    	$post = Post::all();
    	return view('admin.post')->with('post', $post);
    }

    public function create()
    {
    	$category = Category::all();
    	return view('admin.createPost')->with('category', $category);
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
            'postTitle' => 'required|max:255',
            'postContent' => 'required',
            'postCategory' => 'required|max:4',
            'postTags' => 'max:255',
        ]);

        $post = new Post;
        $post->title = $request->input('postTitle');
        $post->content = $request->input('postContent');
        $post->category_id = $request->input('postCategory');
        $post->tags = $request->input('postTags');
        $post->save();

        return redirect('/admin/post')->with('success', 'Post successfully created');
    }
}
