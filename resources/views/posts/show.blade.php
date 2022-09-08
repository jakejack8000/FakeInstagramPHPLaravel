@extends('layouts.app')

@section('content')
    <div class="d-flex container flex-row ">
        <div class = "col container-fluid">
            <img class = "img-fluid rounded border border-dark border-5" src="/storage/{{$post->image}}">
        </div>
        <div class="col d-flex flex-column p-5 border-start border-dark border-5 rounded">
            <a class=" text-decoration-none" href="/profile/{{$post->user->id}}"><h2 class="text-muted"><img class=" rounded-circle" style="max-width: 60px;max-height: 60px;" src="/storage/{{$post->user->profile->picture}}">    {{$post->user->name}}</h2></a>
            <p><br><br><br>{{$post->caption}}</p>
            @foreach ($post->comments as $comment)
                <div class="border d-flex flex-column">
                    <h4 class="text-decoration-underline">{{$comment->user->name}} <span>commented: </span></h4><br>
                    <h5 class="">{{$comment->body}}</h5>
                </div>
            @endforeach
            <form method="post" action="/p/c/{{$post->id}}">
                @csrf
                <div class="mb-3 mt-3 d-flex flex-column">
                    <label for="body">Add Comment:</label>
                    <textarea class="form-control pb-3 mb-5" rows="3" id="comment" name="body"></textarea>

                <button type="submit text-white" class="btn btn-primary align-self-end">Comment</button>
                </div>
            </form>
        </div>
    </div>
@endsection
