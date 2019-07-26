@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
            <H1 class="text-center">Add New Post</H1>
            <div class="form-group row">
                <label for="caption" class="col-md-4 col-form-label text-md-right">Post Caption</label>

                <div class="col-md-6">
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror"
                           name="caption"
                           value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label text-md-right">Post image</label>
                        <input id="caption" name="image" type="file" class="form-control-file">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="row mt-10">
                        <button class="btn btn-primary">
                            Add New Post
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
