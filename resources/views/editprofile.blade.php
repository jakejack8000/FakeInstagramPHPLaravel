@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Profile</div>

                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action={{url('/updateprofile')}}>
                            @csrf

                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end">Title:</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control " name="title" value="{{ $profile->title }}" >

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">description:</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control " name="description" value="{{ $profile->description }}" >

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="URL" class="col-md-4 col-form-label text-md-end">URL:</label>

                                <div class="col-md-6">
                                    <input id="URL" type="text" class="form-control " name="URL" value="{{ $profile->URL }}" >

                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center justify-content-between "class="pt-4"><p class="m-4">Photo:</p>
                                <input id="imgupload" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value=""  >

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Edit Profile
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
