<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Onsen;
use App\Models\Like;
use App\Http\Requests\PostRequest; 
use Illuminate\Http\Request;
use Cloudinary;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Onsen $onsen)
    {
        return view('posts.index')->with(['onsens' => $onsen->get()]);
    }

    public function show()
    {
        return view('posts.show');
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function oki()
    {
        return view('posts.oki');
    }

    public function store(Post $post, PostRequest $request) // 引数をRequestからPostRequestにする
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    public function like(Like $like, Request $request)
    {
        $like->user_id = Auth::id();
        $like->onsen_id = $request['onsen'];
        $like->save();
        $a=$like->first();
        dd($a->users);
        //dd($like->get());
        return view('posts.oki')->with(['likes' => $like->get()]);
        
    }
}
