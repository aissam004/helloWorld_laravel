@extends('layouts.app')


@section('content')

    @foreach($post->tags as $tag)
        <a href="{{route('tags.show',[$tag->id])}}" class="badge bg-dark" style="cursor: default;">#{{$tag->name}}</a>
    @endforeach

    <h2>Post: {{$post->title}}</h2>
    <p>{{$post->content}}</p>
    @if($post->image!=null)
    <p>{{$post->image->path}}</p>
    @endif
    <form action="{{route('comments.store',['id'=>$post->id])}}" method="post">
        @csrf
        <div class="form-group">
            <label for="comment">Title</label>
            <input type="text" class="form-control" id="comment" name="comment" placeholder="Enter a comment" required>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <ul>
        <h4>Comments:</h4>
        @forelse($post->comments as $comment)
            <li>{{$comment->content}} <small class="text-primary">{{$comment->created_at->format('d/m/Y h:m:s')}}</small></li>
            @empty
            <p class="text-danger">there isn't any comment</p>
        @endforelse
    </ul>
@endsection