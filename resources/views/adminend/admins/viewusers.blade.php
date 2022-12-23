@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2> Admin Page</h2>
        </div>
        <div class="card-body">
            <h5>Create A New User</h5>
            <div class="col-md-6">
                <a href="{{url('add-admin')}}">
                    <button type="submit" class="btn btn-primary">Add</button>
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
                <h3 >List Of Users</h3>
                <table class="table table-striped" >
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Created On</th>
                        <th>Last updated</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data['admins'] as $item)
                    <tr>
                        <td>{{$item->adminname}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
                            <a href="{{url('edit-admin/'.$item->adminid)}}">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </a>
                            <form method="GET" action="{{url('delete-admin/'.$item->adminid)}}">
                                @csrf
                                <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                            </form>
                            
                        </td>
                    </tr>
                    @endforeach

                </tbody>
                </table>
          
        </div>
        <div class="text-center d-flex justify-content-center">
            {{ $data['admins']->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection