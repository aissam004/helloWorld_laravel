@extends('layouts.app')


@section('content')

    <form method="post" action="{{route("posts.store")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter title" >
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea  class="form-control" id="title" name="content" value="" placeholder="Enter Content"></textarea>
        </div>
        <div class="form-group">
        <label for="avatar">Choose a profile picture:</label>

        <input class="form-control" type="file"
               id="avatar" name="avatar"
               accept="image/png, image/jpeg">
        </div>
        <div class="form-group">
        <button   type="submit" class="btn btn-primary form-control">Submit</button>
        </div>
    </form>

@endsection