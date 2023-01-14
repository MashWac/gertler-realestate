@extends('layouts.admin')
@section('content')

<div class="card w-50" style="margin-bottom: 20px;">
    <div class="card-body">
        <h5 class="card-title">Add New Listing</h5>
        <a href="{{url('addlisting')}}" class="btn btn-primary">Click Here</a>
    </div>
</div>
<div class="card">
    <div class=" filtersection">
        <div class="formsection">
            <div id="formbuy" style="display:inline;">
                <form method="GET" action="{{url('propertiesfilter')}}">
                    @csrf
                    <div> 
                        <span class="invalid-feedback" role="alert">
                        @error('selectedlocation')<strong>{{ $message }}</strong>@enderror
                        </span>                       
                        <input class="form-control filterinputs @error('selectedlocation') is-invalid @enderror" name="selectedlocation"list="datalistOptions" style="width: 200px;" id="exampleDataList" placeholder="Locations">
                        <datalist id="datalistOptions">
                            @foreach($data['counties'] as $item)
                            <option value="{{$item->name}}" {{$item->name == $data['location'] ? 'selected' : '' }}>{{$item->name}}</option>
                            @endforeach
                        </datalist>
                        <span class="invalid-feedback" role="alert">
                        @error('selectedlocation')<strong>{{ $message }}</strong>@enderror
                        </span> 

                    </div>
                    <select name="housetype" class="form-select filterinputs" style="width: 150px;" aria-placeholder="Category">
                        <option value="all" {{$data['house_type'] == 'all' ? 'selected' : '' }}>All</option>
                        <option value="apartment" {{$data['house_type'] == 'apartment' ? 'selected' : '' }} >Apartment</option>
                        <optgroup label="Houses">
                            <option value="bungalow" {{$data['house_type'] == 'bungalow' ? 'selected' : '' }}>Bungalow</option>
                            <option value="townhouse" {{$data['house_type'] == 'townhouse' ? 'selected' : '' }}>Town House</option>
                            <option value="mansion" {{$data['house_type'] == 'mansion' ? 'selected' : '' }}>Mansion</option>
                            <option value="villa" {{$data['house_type'] == 'villa' ? 'selected' : '' }}>Villa</option>
                            <option value="ranchhouse" {{$data['house_type'] == 'ranchhouse' ? 'selected' : '' }}>Ranch House</option>
                            <option value="condominium" {{$data['house_type'] == 'condominium' ? 'selected' : '' }}>Condominium</option>
                        </optgroup>
                        <optgroup label="Land">
                            <option value="residentialland" {{$data['house_type'] == 'residentialland' ? 'selected' : '' }}>Residential</option>
                            <option value="commercialland" {{$data['house_type'] == 'commercialland' ? 'selected' : '' }}>Commercial Land</option>
                        </optgroup>
                        <optgroup label="Commercial Property">
                            <option value="warehouse" {{$data['house_type'] == 'warehouse' ? 'selected' : '' }}>Warehouses</option>
                            <option value="shop" {{$data['house_type'] == 'shop' ? 'selected' : '' }}>Shops</option>
                            <option value="office" {{$data['house_type'] == 'office' ? 'selected' : '' }}>Offices</option>
                        </optgroup>
                    </select>
                    <select name="listingtype" class="form-select filterinputs" style="width: 150px;"  aria-placeholder="Category">
                        <option value="all" {{$data['listing_type'] == 'all' ? 'selected' : '' }}>All</option>
                        <option value="buy" {{$data['listing_type'] == 'buy' ? 'selected' : '' }}> Buy</option>
                        <option value="rent" {{$data['listing_type'] == 'rent' ? 'selected' : '' }}>Rent</option>
                        <option value="buyrent" {{$data['listing_type'] == 'buyrent' ? 'selected' : '' }}>Buy or Rent </option>
                    </select>
                    <select name="orderby" class="form-select filterinputs" style="width: 150px;"  aria-placeholder="OrderBy">
                        <option value="priceascending" {{$data['orderby'] == 'priceascending' ? 'selected' : '' }}>Price Ascending</option>
                        <option value="pricedescending" {{$data['orderby'] == 'pricedescending' ? 'selected' : '' }}>Price Descending</option>
                        <option value="newtoold" {{$data['orderby'] == 'newtoold' ? 'selected' : '' }}>Newest to Oldest</option>
                        <option value="oldtonew" {{$data['orderby'] == 'oldtonew' ? 'selected' : '' }}>Oldest to Newest</option>
                    </select>
                    @if($data['pricemin'])
                        <input type="number" class="form-control filterinputs" name="minprice" value="{{$data['pricemin']}}" placeholder="Minimum price">
                    @else
                        <input type="number" class="form-control filterinputs" name="minprice" value="{{$data['pricemin']}}" placeholder="Minimum price">
                    @endif
                    @if($data['pricemax'])
                        <input type="number" class="form-control filterinputs" name="maxprice" value="{{$data['pricemax']}}" placeholder="Maximum Price">
                    @else
                        <input type="number" class="form-control filterinputs" name="maxprice" value="{{$data['pricemax']}}" placeholder="Maximum Price">
                    @endif
                    <button type="submit" class="btn filtersbutton" style="float: left;">Search</button>
                </form>

            </div>
        </div>
    </div>
    <div style="background-color: whitesmoke; padding-left:2%;">
        <form action="{{url('searchproperty')}}" method="POST">
            @csrf
            <input type="text" class="form-control filterinputs" name="searchproperty"  placeholder="Search Property Name">
            <button type="submit" class="btn btn-dark" style="float: left;"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
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
                    <th scope="col">House Type</th>
                    <th scope="col">Listing Type</th>
                    <th scope="col">Address</th>
                    <th scope="col">Location</th>
                    <th scope="col">Neighborhood</th>
                    <th scope="col">Starting Price</th>
                    <th scope="col">End Price</th>
                    <th scope="col">Main Photo</th>
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
                        <td>{{$item->house_type}}</td>
                        <td>{{$item->listing_type}}</td>
                        <td>{{$item->full_address}}</td>
                        <td>{{$item->location}}</td>
                        <td>{{$item->neighborhood}}</td>
                        <td>{{$item->starting_price}}</td>
                        <td>{{$item->end_price}}</td>
                        <td><img src="{{$item['mainphoto']}}" height="130px" width="100px" alt='image here'></td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
                        <td>
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
            {{ $data['properties']->appends(Request::all())->links('pagination::bootstrap-5')}}
        </div>
    </div>

@endsection