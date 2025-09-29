<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with('author')->latest('id')->get();
        return Inertia::render('Posts/Index', [
            'posts' => $posts
        ]);
    }

    public function create() {
        return Inertia::render('Posts/Create');
    }

    public function store(StorePostRequest $request) {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']) . '-' . Str::random(5);
        $data['author_id'] = Auth::id();

        Post::create($data);
        
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post) {
        return Inertia::render('Posts/Edit', [
            'post' => $post
        ]);
    }

    public function update(UpdatePostRequest $request, Post $post) {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']) . '-' . Str::random(5);
        $data['author_id'] = Auth::id();

        $post->update($data);
        
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->back();
    }
}
