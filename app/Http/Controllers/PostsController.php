<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->simplePaginate(10);

        return view('admin.posts', ['posts' => $posts]);
    }

    public function messages()
    {
        $posts = Posts::all();

        return view('pages.news', ['posts' => $posts]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = $request->validated();

        Posts::create($post);

        return redirect()->route('admin.posts')->with('success', 'Post created successfully.');
    }

    public function destroy($id)
    {
        DB::table('posts')->where('id', $id)->delete();

        return redirect()->route('admin.posts')->with('success', 'Post deleted successfully.');
    }

    public function edit($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();

        return view('admin.posts.edit', ['post' => $post]);
    }

    public function update(Request $Request)
    {
        $Request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'tag' => 'required|string',
        ]);

        DB::table('posts')->where('id', $Request->id)->update([
            'title' => $Request->title,
            'content' => $Request->content,
            'tag' => $Request->tag,
        ]);

        return redirect()->route('admin.posts')->with('success', 'Post updated successfully.');
    }

}
