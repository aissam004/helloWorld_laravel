@extends('layouts.app')


@section('content')

    <form method="post" action="{{route("posts.store")}}">
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
        <fieldset>
            <legend>Veuillez sélectionner vos intérêts :</legend>
            <div>
                <input type="checkbox" id="coding" name="interest" value="coding">
                <label for="coding">Développement</label>
            </div>
            <div>
                <input type="checkbox" id="music" name="interest" value="music">
                <label for="music">Musique</label>
            </div>
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection