@extends('layouts.app')

@section('content')
    <form action="/p" enctype="multipart/form-data" method="post" class="container d-flex flex-column align-items-start">
        @csrf
    <div class="d-flex flex-row align-items-center justify-content-between"><p class="flex-fill">Post Caption:</p>
        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption" autofocus>

        @error('caption')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
    <div class="d-flex flex-row align-items-center justify-content-between "class="pt-4"><p class="m-4">Photo:</p>
        <input id="imgupload" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}"  autocomplete="name" autofocus>

        @error('image')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror</div>
        <button class="btn btn-primary mt-4 p-2 rounded" type="submit">Create Post</button>
    </form>
@endsection
