<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Post;

class PageController extends Controller
{
    public function home() {
      $posts = Post::all();

      return view('home', [
        'posts' => $posts
      ]);
    }

    public function about() {
      return view('about');
    }

    public function post(Request $request, $id) {
      $post = Post::find($id);

      return view('post', [
        'post' => $post
      ]);
    }

    public function login() {
      return view('admin.login');
    }

    public function logout() {
      Auth::logout();
      return redirect()->route('login');
    }

    public function checkLogin(Request $request) {
      $this->validate($request, [
        'username' => 'required',
        'password' => 'required'
      ]);

      $user_data = array(
        'username' => $request->get('username'),
        'password' => $request->get('password')
      );

      if (Auth::attempt($user_data)) {
        return redirect()->route('allPosts');
      } else {
        return back()->with('error', 'Access Denied');
      }
    }
}
