@extends('layouts.app')

@section('content')
    <div class="d-flex flex-row flex-wrap p-5 m-5 align-items-around justify-content-around" style="max-width: 100%" >
        @foreach(\App\Models\post::all() as $post)
            <div class="m-5 mw-30 mh-30 border " style="max-width: 30%;max-height: 30%">
                <div class= " my-3 d-flex flex-row justify-content-between">
                    <a class=" text-decoration-none" href="/profile/{{$post->user->id}}"><h2 class="text-muted"><img class=" rounded-circle" style="max-width: 60px;max-height: 60px;" src="/storage/{{$post->user->profile->picture}}">    {{$post->user->name}}</h2></a>
                </div>
                <a href = "/p/{{$post->id}}">
                    <img class="img-fluid " src="/storage/{{$post->image}}">
                </a>
                <div class="p-3"><p>{{$post->caption}}</p></div>

            </div>
    @endforeach
@endsection
