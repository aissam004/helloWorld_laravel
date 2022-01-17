@extends('layouts.app')


@section('content')

    <form method="post" action="{{route("posts.store")}}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>

        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea  class="form-control" id="title" name="content" value="" placeholder="Enter Content"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection