@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Practice Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <legend class="text-center">View Topics</legend>
                    <div class="list-group mb-3">
                        <a href="#" class="list-group-item list-group-item-action">Simple Crud</a>
                        <a href="#" class="list-group-item list-group-item-action">Ajax Crud</a>
                        <a href="#" class="list-group-item list-group-item-action">File Upload</a>
                        <a href="{{ url('posts') }}" class="list-group-item list-group-item-action">Post with Text Editor</a>
                    </div>
                    <legend class="text-center">Demo Projects</legend>
                    <div class="list-group">
                        <a href="{{ url('Survey') }}" class="list-group-item list-group-item-action">Sample Survey</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
