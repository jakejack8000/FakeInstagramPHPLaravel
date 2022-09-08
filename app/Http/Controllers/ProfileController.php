<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($user)
    {
        //$images = post::find($user)->all('image');
        $user = User::findOrFail($user);
        //die ($images[3]['image']);
        return view('profile', ['user' => $user]);
    }

    public function edit(){
        $profile = auth()->user()->profile;
        return view('editprofile',['profile'=>$profile]);
    }
    public function update(){
        $usr = auth() -> user();
        $profile = $usr->profile;
        $profile->title = $_POST['title'] ;
        $profile->URL = $_POST['URL'] ;
        $profile->description = $_POST['description'] ;
        if(request('image') != null){
            request()->validate(['image'=>['image']]);
            $path = request('image')->store('uploads','public');
            $profile->picture =$path;
        }
        $profile->save();
        $id = $usr->id;
        return redirect()->action('App\Http\Controllers\ProfileController@index',['id'=>$id]);
    }
}
