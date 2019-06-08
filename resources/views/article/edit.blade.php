@extends('layout')

@section('title')
    <title>Edit Article</title>
@endsection

@section('contents')
    <h1>Edit Article</h1>

    <form action="/edit" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id" class="form-control" value="{{ $article->id }}">
        <div class="form-group">
            <label for="titleInput">Title</label>
            <input type="text" name="title" id="titleInput" class="form-control" value="{{ $article->title }}">
        </div>
        <div class="form-group">
            <label for="bodyInput">Body</label>
            <textarea name="body" id="bodyInput" class="form-control" rows="3">{{ $article->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
    </form>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Article '{{ $article->title }}' will be deleted.
                </div>
                <div class="modal-footer">
                    <form action="/delete" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" class="form-control" value="{{ $article->id }}">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">OK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
