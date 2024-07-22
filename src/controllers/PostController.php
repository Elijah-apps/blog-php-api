<?php

namespace Controllers;

use Models\Post;
use Leaf\Http\Request;
use Leaf\Http\Response;

class PostController
{
    public function index()
    {
        $posts = Post::all();
        Response::json($posts);
    }

    public function show(Request $request)
    {
        $post = Post::find($request->param('id'));
        Response::json($post);
    }

    public function store(Request $request)
    {
        $post = Post::create($request->body());
        Response::json($post, 201);
    }

    public function update(Request $request)
    {
        $post = Post::find($request->param('id'));
        $post->update($request->body());
        Response::json($post);
    }

    public function destroy(Request $request)
    {
        $post = Post::find($request->param('id'));
        $post->delete();
        Response::json(['message' => 'Post deleted']);
    }
}
