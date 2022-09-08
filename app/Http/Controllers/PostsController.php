<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
}


    public function create(){
        return view('posts/create');
    }
    public function store(){

        $data = request()->validate(['caption'=>'required','image'=>['required','image']]);
        $path = request('image')->store('uploads','public');
        auth()->user()->posts()->create(['caption'=>$data['caption'],
           'image'=>$path]);

        return redirect('/profile/' . auth()->user()->id);
    }
    public function show($id){
        $post = post::find($id);
        return view('posts/show',['post'=>$post]);
    }
    public function edit($id){

        $post = post::find($id);
        $this->authorize('update',$post);

        return view('posts/edit',['post'=>$post]);

    }
    public function editconfirm($id){

        $post = post::find($id);
         request()->validate(['caption'=>'required']);

        $post->caption= $_POST['caption'];
        if(request('image') != null){
             request()->validate(['image'=>['image']]) ;
             $path = request('image')->store('uploads','public');
             $post->image=$path;
        }
        $post->save();
        return redirect('/p/'.$post->id);
    }
    public function delete($id){
        $this->authorize('update',post::find($id));

        $a = post::find($id)->comments->all();
        foreach($a as $c){
            $c->delete();
        }
        post::find($id)->delete();
        return redirect('/profile/'.auth()->user()->id);
    }
}
