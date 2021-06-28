@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Survey Lists') }}
                    <a href="{{url('/home')}}" class="btn btn-primary btn-sm float-right"> back </a>
                    <a href="{{url('createquestionaireform')}}" class="btn btn-primary btn-sm float-right mr-3"> Crete Questionaire </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md">
                            @foreach ($surveyquestion as $surveyqn)
                                <a href="{{ url('viewquestion/'.$surveyqn->id) }}" 
                                    style="text-decoration: none; color:inherit; ">
                                    <div class="card bg-white border-2 shadow-md mb-2">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $surveyqn->title }}</h5>
                                            <p class="card-text">{{ $surveyqn->Short_intro }}</p>
                                        </div>
                                    </div>
                                </a>                                
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
