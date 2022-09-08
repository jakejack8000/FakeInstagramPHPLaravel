@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Post</div>

                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="/p/editconfirm/{{$post->id}}">
                            @csrf

                            <div class="row mb-3">
                                <label for="caption" class="col-md-4 col-form-label text-md-end">Caption:</label>

                                <div class="col-md-6">
                                    <input id="caption" type="text" class="form-control " name="caption" value="{{ $post->caption }}" >

                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center justify-content-between "class="pt-4"><p class="m-4">Photo:</p>
                                <input id="imgupload" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}"  autocomplete="name" autofocus>

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Edit Post
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
