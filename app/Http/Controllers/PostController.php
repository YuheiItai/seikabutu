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
        $onsens = Onsen::orderBy('count', 'desc')->get();
        return view('posts.create')->with(['onsens' => $onsens]);
    }
    
    public function ok(Like $like)
    {
        return view('posts.oki')->with(['onsens' => $like->get()]);
    }
    
    public function store(Onsen $onsen, Request $request) // 引数をRequestからPostRequestにする
    {
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input = $request['post'];
        $input += ['image_url' => $image_url];
        $onsen->fill($input)->save();
        return redirect('/posts/' . $onsen->id);
    }
    
    public function like(Like $like, Request $request)
    {
        $like->user_id = Auth::id();
        $like->onsen_id = $request['onsen'];
        $like->save();
        $onsen = Onsen::where( 'id',  '=', $request['onsen'])->first();
        $onsen->count += 1;
        $onsen->save();
        //$a=$like->first();
        //dd($a->users);
        //dd($like->get());
        return view('posts.oki')->with(['like' => $like->orderBy('id', 'desc')->first(),'onsens' => $like->get()]);
    }
    public function sho(Post $post)
{
    return view('posts.show')->with(['post' => $post]);
}
}
