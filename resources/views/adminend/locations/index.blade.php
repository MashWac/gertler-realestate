@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2> Locations Page</h2>
        </div>
        <div class="card-body">
            <h5>Add Location</h5>
            <div class="col-md-6">
                <a href="{{url('add-location')}}">
                    <button type="submit" class="btn btn-primary">Add</button>
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
                <h3 >List Of Locations</h3>
                <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">County</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($locations as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->county}}</td>
                        <td>
                            <a href="{{url('view-location')}}">
                                <button type="submit" class="btn btn-success">View</button>
                            </a>
                            <a href="{{url('edit-location/'.$item->location_id)}}">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </a>
                            <form method="GET" action="{{url('delete-location/'.$item->location_id)}}">
                                @csrf
                                <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
               
        </div>
        <div class="text-center d-flex justify-content-center">
            {{ $locations->appends(Request::all())->links('pagination::bootstrap-5')}}

        </div>
    </div>
@endsection