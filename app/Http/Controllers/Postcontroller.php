<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Postcontroller extends Controller
{
    // public function index(){
    //     return view('About');
    // }

    public function blog()
    {
        $posts = Post::all();
        // dd($posts);
        return view('Blog')->with('posts', $posts);
    }


    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if ($request->hasFile('photo')) {

            if (isset($post->photo)) {
                Storage::delete($post->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post-photos', $name);
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Post::create([
            'title' => $request->title,
            'text' => $request->text,
            'image' => $request->image
        ]);

        return redirect()->back();
    }

    public function show(Post $post)
    {
        return view('post.show');
    }

    public function edit(Post $post)
    {
        return view('post.edit')->with('post', $post);
    }

    public function update(Request $request, Post $post)
    {
        // dd($request);
        // return view('Blog');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        // return view('Blog')->with('post', $post);
    }
}
