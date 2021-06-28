@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __($questionaireId->title) }}
                    <a href="{{url('Survey')}}" class="btn btn-primary btn-sm float-right"> back </a>
                    <a href="{{url('Questionaire/'.$questionaireId->id.'/questions')}}" class="btn mr-3 btn-primary btn-sm float-right"> Add Questions </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>{{ $questionaireId->Short_intro }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
