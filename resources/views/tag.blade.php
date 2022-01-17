@extends('layouts.app')

@section('content')
<h1>Tag: #{{$tag->name}}</h1>
@foreach($tag->posts  as $key => $post)
    <p><a href="{{route("post.show",['id'=>$post->id])}}">{{$post->title}}</a>
        <span class="bg-danger badge badge-warning">{{count($post->comments)}}</span>
        <span class="bg-warning badge badge-warning">{{$post->created_at}}</span></p>
    @endforeach
@endsection