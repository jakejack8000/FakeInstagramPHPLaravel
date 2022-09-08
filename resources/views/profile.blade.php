@extends('layouts.app')

@section('content')

    <div class="container-fluid d-flex flex-column align-items-center">
<div class="d-flex container-sm flex-row  p-5 flex-wrap">
    <div class="col-4 "><img class="img-fluid rounded-circle mx-3 w-75 "src="/storage/{{$user->profile->picture}}"> </div>
    <div class="col-3 d-flex flex-column justify-content-between">
        <h1>{{$user->name}}</h1>
        <h2>{{$user->username}}</h2>
        <div class="d-flex flex-row justify-content-between">
            <div><strong>{{$user->posts->count()}}</strong> Posts </div>
            <div><strong>{{$user->comments->count()}}</strong> Comments </div>
            <div><strong>200</strong> Like </div>
       </div>
       <div class="h5"><strong>{{$user->profile->title}}</strong></div>
        <div class="text-muted">{{$user->profile->description}}</div>
        <div><a class="text-dark" href="https://{{$user->profile->URL}}">{{$user->profile->URL}}</a></div>
    </div>
</div>
<div class="d-flex flex-row flex-wrap p-5 m-5 align-items-around justify-content-around" style="max-width: 100%" >
    @foreach($user->posts as $post)
        <div class="m-5 mw-30 mh-30" style="max-width: 30%;max-height: 30%">
            <div class="d-flex flex-row justify-content-between">
                <div><p>{{$post->caption}}</p></div>
@can('update',$post)
                <div class=" navbar-collapse" id="postmenu">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->

                        <li class="nav-item dropdown">
                            <a style="float:right;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

                            </a>

                            <div class="dropdown-menu dropdown-menu-end align-items-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/p/edit/{{$post->id}}"
                                >
                                    Edit Post
                                </a>
                                <a class="dropdown-item" href="/p/delete/{{$post->id}}"
                                >
                                    Delete Post
                                </a>



                            </div>
                        </li>
                    </ul>
                </div>

                @endcan






























            </div>
            <a href = "/p/{{$post->id}}">
            <img class="img-fluid" src="/storage/{{$post->image}}">
            </a>
        </div>
    @endforeach


</div>
</div>
@endsection
