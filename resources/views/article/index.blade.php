@extends('layout')

@section('title')
    <title>Articles</title>
@endsection

@section('contents')
    <h1>Article List</h1>
    <p><a href="/create" class="btn btn-primary">Create Article</a></p>

    @foreach ($articles as $a)
        <div class="card mb-2">
            <div class="card-body">
                <h4 class="card-title">{{ $a->title }}</h4>
                <h6 class="card-subtitle mb-2 text-muted">{{ $a->updated_at }}</h6>
                <p  class="card-text">{{ $a->body }}</p>
                <a href="/edit/{{ $a->id }}" class="card-link">Edit</a>
            </div>
        </div>
    @endforeach
@endsection
