@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Form') }}
                    <a href="{{url('Survey')}}" class="btn btn-primary btn-sm float-right"> back </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{url('questionairestore')}}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label> Title </label>
                            <input type="text" class="form-control" name="title" placeholder="Enter the Title">
                        </div>
                        <div class="form-group mb-3">
                            <label> Body </label>
                            <textarea class="form-control" id="body" placeholder="Enter the Description" name="Short_intro"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success"> Save </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
