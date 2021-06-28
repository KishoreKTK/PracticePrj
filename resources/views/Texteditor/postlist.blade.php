@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Post with Text Editor') }}
                    <a href="{{url('create')}}" class="btn btn-primary btn-sm float-right"> Add Post </a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($posts) > 0)
                        <div class="table-responsive mt-4">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> Id </th>
                                        <th style="width:30%;"> Title </th>
                                        <th> Decription </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post) 
                                    <tr>
                                        <td> {{ $post->id }} </td>
                                        <td> {{ $post->title }} </td>
                                        <td> {!! html_entity_decode($post->body) !!} </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $posts->links() }}
                        @endif
                    </div>      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection