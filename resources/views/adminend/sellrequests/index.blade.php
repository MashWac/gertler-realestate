@extends('layouts.admin')
@section('content')

<div class="card">
        <div class="card-header text-center">
            <h2>List of Sale Requests</h2>
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
                        <th scope="col">Listing Type</th>
                        <th scope="col">House Type</th>
                        <th scope="col">Propery Description</th>
                        <th scope="col">Full Address</th>
                        <th scope="col">Location</th>
                        <th scope="col">Neighborhood</th>
                        <th scope="col">Floor</th>
                        <th scope="col">Total Bedrooms</th>
                        <th scope="col">Total Bathrooms</th>
                        <th scope="col"> Ammenities</th>
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
                        <td>{{$item->listing_type}}</td>
                        <td>{{$item->house_type}}</td>
                        <td>{{$item->property_description}}</td>
                        <td>{{$item->full_address}}</td>
                        <td>{{$item->location}}</td>
                        <td>{{$item->neighborhood}}</td>
                        
                        <td>
                        @if($item->floor==NULL)
                            <p>0</p>
                        @else
                            {{$item->floor}}
                        @endif
                        </td>
                        <td>{{$item->total_bedrooms}}</td>
                        <td>{{$item->total_bathrooms}}</td>
                        <td>
                        @if($item->doorman!=NULL)
                            <p>**doorman</p>
                        @endif 
                        @if($item->storage!=NULL)
                            <p>** storage</p>
                        @endif 
                        @if($item->elevator!=NULL)
                            <p>** elevator</p>
                        @endif 
                        @if($item->washer!=NULL)
                            <p>** washer</p>
                        @endif 
                        @if($item->natural_lighting!=NULL)
                            <p>** natural lighting</p>
                        @endif 
                        @if($item->laundry_room!=NULL)
                            <p>** laundry room</p>
                        @endif 
                        @if($item->high_ceiling!=NULL)
                            <p>** high ceiling</p>
                        @endif 
                        @if($item->pet_policy!='nopets')
                            <p>** pets allowed</p>
                        @endif 
                        </td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <form method="GET" action="{{url('sellrequestservice/'.$item->seller_requestid)}}">
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
        </div>
    </div>

@endsection