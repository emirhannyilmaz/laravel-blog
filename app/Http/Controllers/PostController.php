<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function allPosts(Request $request) {
      $posts = Post::all();

      return view('admin.allposts', [
        'posts' => $posts
      ]);
    }

    public function createPost(Request $request) {
      return view('admin.createpost');
    }

    public function _createPost(Request $request) {
      $post = new Post;

      $post->title = $request->title;
      $post->content = $request->content;

      $post->save();

      return redirect()->route('allPosts');
    }

    public function editPost(Request $request, $id) {
      $post = Post::find($id);

      return view('admin.editpost', [
        'post' => $post
      ]);
    }

    public function _editPost(Request $request, $id) {
      $post = Post::find($id);

      $post->title = $request->title;
      $post->content = $request->content;

      $post->save();

      return redirect()->route('allPosts');
    }

    public function deletePost(Request $request, $id) {
      $post = Post::find($id);

      $post->delete();

      return redirect()->route('allPosts');
    }
}
