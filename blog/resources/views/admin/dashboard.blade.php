@extends('layouts.app')

@section('content')

    <div class="col-lg-3">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                POSTS
            </div>

            <div class="panel-body">
                <h2 class="text-center">{{$posts_count}}</h2>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-danger">
            <div class="panel-heading text-center">
                 TRASHED POSTS
            </div>

            <div class="panel-body">
                <h2 class="text-center">{{$trashed_posts}}</h2>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-success">
            <div class="panel-heading text-center">
                USERS
            </div>

            <div class="panel-body">
                <h2 class="text-center">{{$users_count}}</h2>
            </div>
        </div>
    </div>


    <div class="col-lg-3">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                CATEGORIES
            </div>

            <div class="panel-body">
                <h2 class="text-center">{{$categories_count}}</h2>
            </div>
        </div>
    </div>

@endsection
