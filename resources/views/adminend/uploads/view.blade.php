@extends('layouts.admin')
@section('content')

<div class="card w-50" style="margin-bottom: 20px;">
    <div class="card-body">
        <h5 class="card-title">Add New Listing</h5>
        <a href="{{url('addlisting')}}" class="btn btn-primary">Click Here</a>
    </div>
</div>
<div class="card" style="display: block; overflow:scroll;">
        <div class="card-header text-center">
            <h2>List of Property</h2>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">Property Name</th>
                    <th scope="col">Seller</th>
                    <th scope="col">Property Description</th>
                    <th scope="col">House Type</th>
                    <th scope="col">Listing Type</th>
                    <th scope="col">Address</th>
                    <th scope="col">Location</th>
                    <th scope="col">Neighborhood</th>
                    <th scope="col">Land Details</th>
                    <th scope="col">Building Details</th>
                    <th scope="col">Apartment Details </th>
                    <th scope="col">Starting Price</th>
                    <th scope="col">End Price</th>
                    <th scope="col">Floor</th>
                    <th scope="col">Acreage</th>
                    <th scope="col">SqFt</th>
                    <th scope="col">Total Bedrooms</th>
                    <th scope="col">Total Bathrooms </th>
                    <th scope="col">Main Photo</th>
                    <th scope="col">Ammenities</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                @foreach($data['properties'] as $item)
    
                    <tr>
                        <td class="w-25">{{$item->property_name}}</td>
                        <td>{{$item->firstname}} {{$item->lastname}}</td>
                        <td>{!!$item->property_description!!}</td>
                        <td>{{$item->house_type}}</td>
                        <td>{{$item->listing_type}}</td>
                        <td>{{$item->full_address}}</td>
                        <td>{{$item->location}}</td>
                        <td>{{$item->neighborhood}}</td>
                        <td>{{$item->land_details}}</td>
                        <td>{{$item->building_details}}</td>
                        <td>{{$item->apartment_details}}</td>
                        <td>{{$item->starting_price}}</td>
                        <td>{{$item->end_price}}</td>
                        <td>{{$item->acreage}}</td>
                        <td>{{$item->square_feet}}</td>
                        <td>{{$item->total_bedrooms}}</td>
                        <td>{{$item->total_bathrooms}}</td>
                        <td><img src="{{$item['mainphoto']}}" height="130px" width="100px" alt='image here'></td>
                        <td>
                            @if($item['doorman']!=NULL)
                            <i class="fa-regular fa-user-pilot"></i>
                            <p>doorman</p>
                            @endif
                            @if($item['storage']!=NULL)
                            <i class="fa-regular fa-user-pilot"></i>
                            <p>storage</p>
                            @endif
                            @if($item['elevator']!=NULL)
                            <i class="fa-regular fa-user-pilot"></i>
                            <p>elevator</p>
                            @endif
                            @if($item['washer']!=NULL)
                            <i class="fa-regular fa-user-pilot"></i>
                            <p>washer</p>
                            @endif
                            @if($item['natural_lighting']!=NULL)
                            <i class="fa-regular fa-user-pilot"></i>
                            <p>lighting</p>

                            @endif
                            @if($item['laundry_room']!=NULL)
                            <i class="fa-regular fa-user-pilot"></i>
                            <p>laundry</p>

                            @endif
                            @if($item['high_ceiling']!=NULL)
                            <i class="fa-regular fa-user-pilot"></i>
                            <p>ceiling</p>
                            @endif
                            @if($item['pet_policy']!='nopets')
                            <i class="fa-regular fa-user-pilot"></i>
                            <p>pets</p>
                            @endif
                        </td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
                        <td>
                            <a href="{{url('view-location')}}">
                                <button type="submit" class="btn btn-success">View</button>
                            </a>
                            <a href="{{url('edit-property/'.$item->property_id)}}">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </a>
                            <form method="GET" action="{{url('delete-property/'.$item->property_id)}}">
                                @csrf
                                <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                            </form>
                        <td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="text-center d-flex justify-content-center">
            {{ $data['properties']->links('pagination::bootstrap-4') }}
        </div>
    </div>

@endsection