@extends('layout')

@section('title')
    <title>Create Article</title>
@endsection

@section('contents')
    <h1>Create Article</h1>

    <form action="/create" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="titleInput">Title</label>
            <input type="text" name="title" id="titleInput" class="form-control">
        </div>
        <div class="form-group">
            <label for="bodyInput">Body</label>
            <textarea name="body" id="bodyInput" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
