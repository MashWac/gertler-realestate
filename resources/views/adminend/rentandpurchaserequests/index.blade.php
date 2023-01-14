@extends('layouts.admin')
@section('content')

<div class="card">
        <div class="card-header text-center">
            <h2>List Of Purchase/Rent Requests</h2>
        </div>
        <div class="card-body" style="display: block; overflow:auto">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Country Code</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Property Name</th>
                    <th scope="col">House Type </th>
                    <th scope="col">Location</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($data['requests'] as $item)
                    <tr>
                        <td>{{$item->firstname}}</td>
                        <td>{{$item->lastname}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->country_code}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->property_name}}</td>
                        <td>{{$item->house_type}}</td>
                        <td>{{$item->neighborhood}}</td>
                        <td>{{$item->created_at}}</td>   
                        <td>
                            <form method="GET" action="{{url('rentpurchaserequestserviced/'.$item->rentandpurchaserequest_id)}}">
                                @csrf
                                <button type="submit" class="btn btn-danger show_confirmrequest" data-toggle="tooltip" title='Service'>Service</button>
                            </form>
                        </td>     
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center d-flex justify-content-center">
        {{ $data['requests']->appends(Request::all())->links('pagination::bootstrap-5')}}
        </div>
    </div>

@endsection