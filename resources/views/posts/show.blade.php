@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div class="card card-image">
        <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
    </div>
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr/>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
@endsection