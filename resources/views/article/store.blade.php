@extends('layout')

@section('title')
    <title>Article Created</title>
@endsection

@section('contents')
    <h1>New Article Has Been Created</h1>

    <div class="alert alert-primary" role="alert">
        New article has been created.
        <a href="/" class="btn btn-primary">Back</a>
    </div>
@endsection
