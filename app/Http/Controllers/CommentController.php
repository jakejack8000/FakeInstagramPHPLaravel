<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store($post_id){

        $comment = comment::create(['user_id' =>auth()->user()->id,
                                    'post_id' =>$post_id,
                                    'body'=>request()->body]);
        return redirect('/p/'.$post_id);
}
}
