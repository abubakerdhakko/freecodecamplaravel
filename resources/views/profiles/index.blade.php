@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="text-center">
                <img src="img/instagram.jpg" height="100px" width="100px">
            </div>
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between ">
                <h1>{{ $user->username }}</h1>

                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>131</strong>post</div>

                <div class="pr-5"><strong>23k</strong>followers</div>

                <div class="pr-5"><strong>131</strong>followings</div>
            </div>

            <div class="">
                <h1>{{ $user->profile->title }}</h1>
            </div>

            <div class="">
                <p>{{ $user->profile->description }}</p>
            </div>

            <div class="">
                <a>{{ $user->profile->url ?? 'N/A' }}</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="img/instagram.jpg" height="100px" width="100px" class="w-100 h-100 p-10">
        </div>

        <div class="col-4">
            <img src="img/instagram.jpg" height="100px" width="100px" class="w-100 h-100 p-10">
        </div>
        <div class="col-4">
            <img src="img/instagram.jpg" height="100px" width="100px" class="w-100 h-100 p-10">
        </div>
    </div>
</div>
@endsection
