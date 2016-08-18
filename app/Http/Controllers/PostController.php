<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Post;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['getAll']]);
    }
    
    public function store(Request $request) {
        
        $user = User::where('id', $request->input('user_id'))->first();
        $post = new Post;
        
        $post->title = ('null');
        $post->body = $request->input('body');
        
        $user->posts()->save($post);
        
        return redirect('/');
    }
    
    public function destroy($id) {
        $post = new Post;
        $post = $post->find($id);
        $post->delete();
        
        return redirect("/user/$post->user_id");
    }
    
    public function getAll() {
        return Post::orderBy('created_at', 'desc')->get();
        
    }
    
    public function getOne($id) {
        $post = Post::find($id);
        return view('editPost', compact('post'));
    } 
    
    public function editPost(Request $request, $id) {
        $user = User::where('id', $request->input('user_id'))->first();
        $post = Post::find($id);
        
        $post->body = $request->input('body');
        
        $user->posts()->save($post);
        
        return redirect('/');
    }
    
    
    
}
