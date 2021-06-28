@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Questions') }}
                    <a href="{{url('Survey')}}" class="btn btn-primary btn-sm float-right"> back </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{url('Questionaire/'.$questionaireId->id.'/questionpost')}}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label> Question </label>
                            <input type="text" class="form-control" name="question[question]" required placeholder="Enter Question">
                        </div>
                        
                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <div class="form-group">
                                    <label> Choice 1 </label>
                                    <input type="text" class="form-control" name="answer[][answer]" required placeholder="Enter Choice 1">
                                </div>
                                <div class="form-group">
                                    <label> Choice 2 </label>
                                    <input type="text" class="form-control" name="answer[][answer]" required placeholder="Enter Choice 2">
                                </div>
                                <div class="form-group">
                                    <label> Choice 3 </label>
                                    <input type="text" class="form-control" name="answer[][answer]" required placeholder="Enter Choice 3">
                                </div>
                                <div class="form-group">
                                    <label> Choice 4 </label>
                                    <input type="text" class="form-control" name="answer[][answer]" required placeholder="Enter Choice">
                                </div>
                            </fieldset>
                        </div>
                        <button type="submit" class="btn btn-success"> Save </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
