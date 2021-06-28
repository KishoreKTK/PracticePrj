@extends('BasicCrud.home')
@section('crudview')
<div class="card">
    <div class="card-header">
        City/District Crud
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-4 bg-aqua border p-2">
                <form action="{{ url('/statepost') }}" method="post" autocomplete="off">
                    <div class="mb-3">
                    <h5>Add New City/District</h5>
                    </div>
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="city" class="form-control" placeholder="City" aria-label="City">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="state" class="form-control" placeholder="State" aria-label="State">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="zip" class="form-control" placeholder="Zip" aria-label="Zip">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col">
                <table class="table table-border table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>District / City</th>
                            <th>State</th>
                            <th>Zip</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody> 
                            @foreach ($city_det as $city)
                            <tr>
                                <td scope="row">{{ $city->city}}</td>
                                <td>{{ $city->state}}</td>
                                <td>{{ $city->zip}}</td>
                                <td> 
                                    <div class="btn-toolbar">
                                        <a class="btn btn-sm btn-outline-warning" href="{{ url('updatepost/'.$city->id) }}">
                                            <i class="fa fa-edit" style="text-decoration: none;"></i>
                                        </a> &nbsp;
                                        <form action="{{ url('deletestate/'.$city->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-sm btn-outline-danger" type="submit"><i class="fa fa-trash-o" style="text-decoration: none;"  aria-hidden="true"></i></button>               
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection