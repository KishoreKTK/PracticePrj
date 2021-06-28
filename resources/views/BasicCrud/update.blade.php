@extends('BasicCrud.home')
@section('crudview')
{{-- <div class="mt-4 float-right"> --}}
    <div class="card w-50 float-right rounded-left border border-info"> 
    {{-- style="width: 18rem;"> --}}
        <div class="card-header">
            <h5>Update City/District</h5>
        </div>
        <div class="card-body">
            <form action="{{ url('/updatepost/'.$update_id->id) }}" method="post" autocomplete="off">
                {{-- <input type="hidden" name="updateid" value="{{$update_id->id}}"> --}}
                @csrf
                <div class="mb-3">
                    <input type="text" name="city" class="form-control" placeholder="City" value="{{$update_id->city}}" aria-label="City">
                </div>
                <div class="mb-3">
                    <input type="text" name="state" class="form-control" placeholder="State" value="{{$update_id->state}}" aria-label="State">
                </div>
                <div class="mb-3">
                    <input type="text" name="zip" class="form-control" value="{{$update_id->zip}}" placeholder="Zip" aria-label="Zip">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
{{-- </div> --}}
@endsection