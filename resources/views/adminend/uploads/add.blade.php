@extends('layouts.admin')
@section('content')

@if($data['formtype']=='add')
<div class="card">
        <div class="card-header text-center">
            <h2> Add New Property</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('insert-listing')}}" enctype="multipart/form-data">
                @csrf
                <div class="container">
                <div class="row">
                    <h3>Seller Details</h3>
                        <div class="col-md-6 ">
                            <label for="sellerfname">First Name</label>
                            <input id="sellerfname" type="text" class="form-control @error('sellerfname') is-invalid @enderror"   name="sellerfname" value="{{ old('sellerfname')}}" autocomplete="sellerfname" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('sellerfname')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="sellerlname">Last Name</label> 
                            <input id="sellerlname" type="text" class="form-control @error('sellerlname') is-invalid @enderror"  name="sellerlname" value="{{ old('sellerlname')}}" autocomplete="sellerlname" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('sellerlname')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="selleremail">Email</label>
                            <input id="selleremail" type="email" class="form-control @error('selleremail') is-invalid @enderror"  name="selleremail" value="{{ old('selleremail')}}" autocomplete="selleremail" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('selleremail')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>   
                        </div>
                        <div class="col-md-6 ">
                            <div class="col-md-3">
                                <label for="sellercountrycode">
                                    Country Code
                                </label>
                                <select name="sellercountrycode" class="form-select" aria-label="Default select example">
                                    @foreach($data['countries'] as $item)
                                    <option value="{{$item->phonecode}}">+{{$item->phonecode}} | {{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <label for="sellerphone">Phone</label>
                            <input type="number" class="form-control @error('sellerphone') is-invalid @enderror"  name="sellerphone" value="{{ old('sellerphone')}}">
                            <span class="invalid-feedback" role="alert">
                            @error('sellerphone')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>  
                        </div>
                        <h3>Property Details</h3>
                        <div class="col-md-12 ">
                            <label for="propertyname">Property Name</label> 
                            <input id="propertyname" type="text" class="form-control @error('propertyname') is-invalid @enderror"  name="propertyname" value="{{ old('propertyname')}}" autocomplete="propertyname" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('propertyname')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-12 ">
                            <label for="propertydescription">Property Description</label> 
                            <textarea class="form-control @error('propertydescription') is-invalid @enderror" name="propertydescription" id="propertydescription"autocomplete="propertydescription" autofocus> {{ old('propertydescription')}}</textarea>
                            <span class="invalid-feedback" role="alert">
                            @error('propertydescription')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6">
                            <label for="housetype">House Type</label> 
                            <select name="housetype" class="form-select" aria-label="Default select example">
                                <option value="apartment" selected>Apartment</option>
                                <optgroup label="Houses">
                                    <option value="bungalow">Bungalow</option>
                                    <option value="townhouse">Town House</option>
                                    <option value="mansion">Mansion</option>
                                    <option value="villa">Villa</option>
                                    <option value="ranchhouse">Ranch House</option>
                                    <option value="condominium">Condominium</option>
                                </optgroup>
                                <optgroup label="Land">
                                    <option value="residentialland">Residential</option>
                                    <option value="commercialland">Commercial Land</option>
                                </optgroup>
                                <optgroup label="Commercial Property">
                                    <option value="warehouse">Warehouses</option>
                                    <option value="shop">Shops</option>
                                    <option value="office">Offices</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="listingtype">Listing type</label> 
                            <select class="form-select" name="listingtype"aria-label="Default select example">
                                <option value="buy" selected>Buy</option>
                                <option value="rent">Rent</option>
                                <option value="buyrent">Buy or Rent </option>
                                <option value="selling">Brokering</option>
                            </select>
                        </div>
                        <div class="col-md-6 ">
                            <label for="propertyaddress">Street</label>
                            
                            <input id="propertyaddress" type="text" class="form-control @error('propertyaddress') is-invalid @enderror"   name="propertyaddress" value="{{ old('propertyaddress')}}" autocomplete="propertyaddress" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('propertyaddress')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6">
                            <label for="countylocate">Location</label>
                            <input type="text" class="form-control @error('countylocate') is-invalid @enderror" name="countylocate" list="countyselect" value="{{ old('countylocate')}}">
                                <datalist id="countyselect">
                                    @foreach($data['counties'] as $item)
                                    <option value="<?=$item['name']?>"><?="county-".$item['name']?><option>
                                    @endforeach
                                </datalist>
                                <span class="invalid-feedback" role="alert">
                                    @error('countylocate')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                </span>   
                        </div>
                        <div class="col-md-6">
                            <label for="neighborhood">Neighborhood</label>
                            <input type="text" class="form-control @error('neighborhood') is-invalid @enderror" name="neighborhood" list="neighborhoodselect" value="{{ old('neighborhood')}}">
                                <datalist id="neighborhoodselect">
                                    @foreach($data['locations'] as $item)
                                    <option value="<?=$item['name']?>"><?="Neighborhood-".$item['name']?><option>
                                    @endforeach
                                </datalist>
                                <span class="invalid-feedback" role="alert">
                                    @error('neighborhood')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                </span>   
                        </div>
                        <div class="col-md-3 ">
                            <label for="propertystartprice">Starting Price:</label> 
                            <input id="propertystartprice" type="number" class="form-control @error('propertystartprice') is-invalid @enderror" min="0" name="propertystartprice" value="{{ old('propertystartprice')}}" autocomplete="propertystartprice" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('propertystartprice')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-3 ">
                            <label for="propertyendprice">Ending price:</label> 
                            <input id="propertyendprice" type="text" class="form-control @error('propertyendprice') is-invalid @enderror"  name="propertyendprice" value="{{ old('propertyendprice')}}" autocomplete="propertyendprice" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('propertyendprice')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="landdetails">Land Details</label> 
                            <input id="landdetails" type="text" class="form-control @error('landdetails') is-invalid @enderror"  name="landdetails" value="{{ old('landdetails')}}" autocomplete="landdetails" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('landdetails')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="buildingdetails">Building Details</label> 
                            <input id="buildingdetails" type="text" class="form-control @error('buildingdetails') is-invalid @enderror"  name="buildingdetails" value="{{ old('buildingdetails')}}" autocomplete="buildingdetails" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('buildingdetails')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="apartmentdetails">Apartment Details</label> 
                            <input id="apartmentdetails" type="text" class="form-control @error('apartmentdetails') is-invalid @enderror"  name="apartmentdetails" value="{{ old('apartmentdetails')}}" autocomplete="apartmentdetails" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('apartmentdetails')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="acreage">Acreage</label> 
                            <input id="acreage" type="number" class="form-control @error('acreage') is-invalid @enderror" step="any"   name="acreage" value="{{ old('acreage')}}" autocomplete="acreage" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('acreage')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="sqft">Square Meters</label> 
                            <input id="sqft" type="number" class="form-control @error('sqft') is-invalid @enderror"  name="sqft" value="{{ old('sqft')}}" autocomplete="sqft" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('sqft')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="propertyfloor">Floor</label>
                            <input id="propertyfloor" type="number" class="form-control @error('propertyfloor') is-invalid @enderror"  name="propertyfloor" value="{{ old('propertyfloor')}}" autocomplete="propertyfloor" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('propertyfloor')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>   
                        </div>
                        <div class="col-md-6 ">
                            <label for="propertybedrooms">Total Bedrooms</label>
                            <input type="number" class="form-control @error('propertybedrooms') is-invalid @enderror"  name="propertybedrooms" value="{{ old('propertybedrooms')}}">
                            <span class="invalid-feedback" role="alert">
                            @error('propertybedrooms')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>  
                        </div>
                        <div class="col-md-6 ">
                            <label for="propertybathrooms">Total Bathrooms</label>
                            <input type="number" class="form-control @error('propertybathrooms') is-invalid @enderror" step="any"   name="propertybathrooms" value="{{ old('propertybathrooms')}}">
                            <span class="invalid-feedback" role="alert">
                            @error('propertybathrooms')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>  
                        </div>
                        <div class="col-md-12 ">

                            <label for="propertyamenities">Ammenities</label> 
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="ammenitydoorman" name="ammenitydoorman" id="ammenitydoorman">
                                <label class="form-check-label" for="ammenitydoorman">
                                    Doorman
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ammenitystorage" value="ammenitystorage" id="ammenitystorage" >
                                <label class="form-check-label" for="ammenitystorage">
                                    Storage
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ammenityelevator" value="ammenityelevator" id="ammenityelevator">
                                <label class="form-check-label" for="ammenityelevator">
                                    Elevator
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="ammenitywasher" name="ammenitywasher" id="ammenitywasher" >
                                <label class="form-check-label" for="ammenitywasher">
                                    Washer/Dryer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="ammenitynatural" name="ammenitynatural" id="ammenitynatural">
                                <label class="form-check-label" for="ammenitynatural">
                                    Natural lighting
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="ammenitylaundry" name="ammenitylaundry" id="ammenitylaundry" >
                                <label class="form-check-label" for="ammenitylaundry">
                                    Laundry Room
                                </label>
                            </div>                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="ammenityhighceiling" name="ammenityhighceiling" id="ammenityhighceiling">
                                <label class="form-check-label" for="ammenityhighceiling">
                                    High Ceiling
                                </label>
                            </div>

                        </div>
                        <div class="col-md-6 ">
                            <div class="col-md-6">
                                <label for="policypet">Pet Policy</label> 
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="petpolicy" id="petpolicy" value="petsallowed">
                                <label class="form-check-label" for="petpolicy">Pets allowed</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="petpolicy" id="petpolicy" value="nopets" checked>
                                <label class="form-check-label" for="petpolicy">No pets</label>
                            </div>

                            <span class="invalid-feedback" role="alert">
                            @error('petpolicy')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-12">
                                <label for="mainimage">Main Property Image</label>
                                <input type="file" class="form-control @error('mainimage') is-invalid @enderror" id="img"  value="{{ old('mainimage')}}"name="mainimage">
                                <span class="invalid-feedback" role="alert">
                                @error('mainimage')
                                    <strong>{{ $message }}</strong>
                                    @enderror
                                </span>  
                        </div>
                        <div class="col-md-6" id="selectedBanner">

                        </div>

                        <div class="col-md-12">
                            <label for="otherimages">Other Property Images</label>
                            <input type="file" class="form-control @error('otherimages') is-invalid @enderror" name="otherimages[]" multiple id="gallery-photo-add">
                            <span class="invalid-feedback" role="alert">
                                @error('otherimages')
                                    <strong>{{ $message }}</strong>
                                    @enderror
                            </span> 
                        </div>
                        <div class="gallery"></div>

            
                        <div class="col-md-12" style="margin-top: 6%;">
                            <button type="submit" class="btn btn-dark buttongoproduct">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="text-center d-flex justify-content-center">
        </div>
</div>
@else
<div class="card">
        <div class="card-header text-center">
            <h2> Edit Property</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('update-listing/'.$data['listing']->property_id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="container">
                <div class="row">
                    <h3>Seller Details</h3>
                        <div class="col-md-6 ">
                            <label for="sellerfname">First Name</label>
                            <input id="sellerfname" type="text" class="form-control @error('sellerfname') is-invalid @enderror"   name="sellerfname" value="{{ $data['listing']->firstname}}" autocomplete="sellerfname" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('sellerfname')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="sellerlname">Last Name</label> 
                            <input id="sellerlname" type="text" class="form-control @error('sellerlname') is-invalid @enderror"  name="sellerlname" value="{{ $data['listing']->lastname}}" autocomplete="sellerlname" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('sellerlname')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="selleremail">Email</label>
                            <input id="selleremail" type="email" class="form-control @error('selleremail') is-invalid @enderror"  name="selleremail" value="{{ $data['listing']->email}}" autocomplete="selleremail" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('selleremail')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>   
                        </div>
                        <div class="col-md-6 ">
                            <div class="col-md-3">
                                <label for="sellercountrycode">
                                    Country Code
                                </label>
                                <select name="sellercountrycode" class="form-select" aria-label="Default select example">
                                    @foreach($data['countries'] as $item)
                                    @if($item['phonecode']==$data['listing']->country_code)
                                        <option value="{{$item->phonecode}}" selected>+{{$item->phonecode}} | {{$item->name}}</option>
                                    @else
                                        <option value="{{$item->phonecode}}">+{{$item->phonecode}} | {{$item->name}}</option>

                                    @endif
                                    @endforeach
                                </select>
                            </div>

                            <label for="sellerphone">Phone</label>
                            <input type="number" class="form-control @error('sellerphone') is-invalid @enderror"  name="sellerphone" value="{{ $data['listing']->phone}}">
                            <span class="invalid-feedback" role="alert">
                            @error('sellerphone')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>  
                        </div>
                        <h3>Property Details</h3>
                        <div class="col-md-12 ">
                            <label for="propertyname">Property Name</label> 
                            <input id="propertyname" type="text" class="form-control @error('propertyname') is-invalid @enderror"  name="propertyname" value="{{ $data['listing']->property_name}}" autocomplete="propertyname" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('propertyname')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-12 ">
                            <label for="propertydescription">Property Description</label> 
                            <textarea class="form-control @error('propertydescription') is-invalid @enderror" name="propertydescription" id="propertydescription"autocomplete="propertydescription" autofocus>{!! $data['listing']->property_description  !!}</textarea>
                            <span class="invalid-feedback" role="alert">
                            @error('propertydescription')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6">
                            <label for="housetype">House Type</label> 
                            <select name="housetype" class="form-select" aria-label="Default select example">
                            <option value="apartment" {{$data['listing']->house_type == 'apartment' ? 'selected' : '' }} >Apartment</option>
                            <optgroup label="Houses">
                                <option value="bungalow" {{$data['listing']->house_type == 'bungalow' ? 'selected' : '' }}>Bungalow</option>
                                <option value="townhouse" {{$data['listing']->house_type == 'townhouse' ? 'selected' : '' }}>Town House</option>
                                <option value="mansion" {{$data['listing']->house_type == 'mansion' ? 'selected' : '' }}>Mansion</option>
                                <option value="villa" {{$data['listing']->house_type == 'villa' ? 'selected' : '' }}>Villa</option>
                                <option value="ranchhouse" {{$data['listing']->house_type == 'ranchhouse' ? 'selected' : '' }}>Ranch House</option>
                                <option value="condominium" {{$data['listing']->house_type == 'condominium' ? 'selected' : '' }}>Condominium</option>
                            </optgroup>
                            <optgroup label="Land">
                                <option value="residentialland" {{$data['listing']->house_type == 'residentialland' ? 'selected' : '' }}>Residential</option>
                                <option value="commercialland" {{$data['listing']->house_type == 'commercialland' ? 'selected' : '' }}>Commercial Land</option>
                            </optgroup>
                            <optgroup label="Commercial Property">
                                <option value="warehouse" {{$data['listing']->house_type == 'warehouse' ? 'selected' : '' }}>Warehouses</option>
                                <option value="shop" {{$data['listing']->house_type == 'shop' ? 'selected' : '' }}>Shops</option>
                                <option value="office" {{$data['listing']->house_type == 'office' ? 'selected' : '' }}>Offices</option>
                            </optgroup>
                        </select>
                        </div>
                        <div class="col-md-6">
                            <label for="listingtype">Listing type</label> 
                            <select name="listingtype" class="form-select filterinputs" style="width: 150px;"  aria-placeholder="Category">
                                <option value="all" {{$data['listing']->listing_type == 'all' ? 'selected' : '' }}>All</option>
                                <option value="buy" {{$data['listing']->listing_type == 'buy' ? 'selected' : '' }}> Buy</option>
                                <option value="rent" {{$data['listing']->listing_type == 'rent' ? 'selected' : '' }}>Rent</option>
                                <option value="buyrent" {{$data['listing']->listing_type == 'buyrent' ? 'selected' : '' }}>Buy or Rent </option>
                            </select>
                        </div>
                        <div class="col-md-6 ">
                            <label for="propertyaddress">Street</label>
                            
                            <input id="propertyaddress" type="text" class="form-control @error('propertyaddress') is-invalid @enderror"   name="propertyaddress" value="{{ $data['listing']->full_address}}" autocomplete="propertyaddress" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('propertyaddress')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6">
                            <label for="countylocate">Location</label>
                            <input type="text" class="form-control @error('countylocate') is-invalid @enderror" name="countylocate" list="countyselect" value="{{ $data['listing']->location}}">
                                <datalist id="countyselect">
                                    @foreach($data['counties'] as $item)
                                    <option value="<?=$item['name']?>"><?="county-".$item['name']?><option>
                                    @endforeach
                                </datalist>
                                <span class="invalid-feedback" role="alert">
                                    @error('countylocate')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                </span>   
                        </div>
                        <div class="col-md-6">
                            <label for="neighborhood">Neighborhood</label>
                            <input type="text" class="form-control @error('neighborhood') is-invalid @enderror" name="neighborhood" list="neighborhoodselect" value="{{ $data['listing']->neighborhood}}">
                                <datalist id="neighborhoodselect">
                                    @foreach($data['locations'] as $item)
                                    <option value="<?=$item['name']?>"><?="Neighborhood-".$item['name']?><option>
                                    @endforeach
                                </datalist>
                                <span class="invalid-feedback" role="alert">
                                    @error('neighborhood')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                </span>   
                        </div>
                        <div class="col-md-3 ">
                            <label for="propertystartprice">Starting Price:</label> 
                            <input id="propertystartprice" type="number" class="form-control @error('propertystartprice') is-invalid @enderror" min="0" name="propertystartprice" value="{{ $data['listing']->starting_price}}" autocomplete="propertystartprice" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('propertystartprice')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-3 ">
                            <label for="propertyendprice">Ending price:</label> 
                            <input id="propertyendprice" type="text" class="form-control @error('propertyendprice') is-invalid @enderror"  name="propertyendprice" value="{{ $data['listing']->end_price}}" autocomplete="propertyendprice" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('propertyendprice')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="landdetails">Land Details</label> 
                            <input id="landdetails" type="text" class="form-control @error('landdetails') is-invalid @enderror"  name="landdetails" value="{{ $data['listing']->land_details}}" autocomplete="landdetails" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('landdetails')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="buildingdetails">Building Details</label> 
                            <input id="buildingdetails" type="text" class="form-control @error('buildingdetails') is-invalid @enderror"  name="buildingdetails" value="{{ $data['listing']->building_details}}" autocomplete="buildingdetails" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('buildingdetails')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="apartmentdetails">Apartment Details</label> 
                            <input id="apartmentdetails" type="text" class="form-control @error('apartmentdetails') is-invalid @enderror"  name="apartmentdetails" value="{{ $data['listing']->apartment_details}}" autocomplete="apartmentdetails" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('apartmentdetails')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="acreage">Acreage</label> 
                            <input id="acreage" type="number" class="form-control @error('acreage') is-invalid @enderror"  name="acreage" step="any" value="{{ $data['listing']->acreage}}" autocomplete="acreage" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('acreage')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="sqft">Square Meters</label> 
                            <input id="sqft" type="number" class="form-control @error('sqft') is-invalid @enderror"  name="sqft" value="{{  $data['listing']->square_feet}}" autocomplete="sqft" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('sqft')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="propertyfloor">Floor</label>
                            <input id="propertyfloor" type="number" class="form-control @error('propertyfloor') is-invalid @enderror"  name="propertyfloor" value="{{ $data['listing']->floor}}" autocomplete="propertyfloor" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('propertyfloor')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>   
                        </div>
                        <div class="col-md-6 ">
                            <label for="propertybedrooms">Total Bedrooms</label>
                            <input type="number" class="form-control @error('propertybedrooms') is-invalid @enderror"  name="propertybedrooms" value="{{ $data['listing']->total_bedrooms}}">
                            <span class="invalid-feedback" role="alert">
                            @error('propertybedrooms')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>  
                        </div>
                        <div class="col-md-6 ">
                            <label for="propertybathrooms">Total Bathrooms</label>
                            <input type="number" class="form-control @error('propertybathrooms') is-invalid @enderror" step="any"  name="propertybathrooms" value="{{ $data['listing']->total_bathrooms}}">
                            <span class="invalid-feedback" role="alert">
                            @error('propertybathrooms')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>  
                        </div>
                        <div class="col-md-12 ">

                            <label for="propertyamenities">Ammenities</label> 
                            <div class="form-check">
                                @if($data['listing']->doorman==NULL)
                                <input class="form-check-input" type="checkbox" value="ammenitydoorman" name="ammenitydoorman" id="ammenitydoorman">
                                @else
                                <input class="form-check-input" type="checkbox" value="ammenitydoorman" name="ammenitydoorman" id="ammenitydoorman" checked>
                                @endif
                                <label class="form-check-label" for="ammenitydoorman">
                                    Doorman
                                </label>

                            </div>
                            <div class="form-check">
                                @if($data['listing']->storage==NULL)
                                <input class="form-check-input" type="checkbox" name="ammenitystorage" value="ammenitystorage" id="ammenitystorage" >
                                @else
                                <input class="form-check-input" type="checkbox" name="ammenitystorage" value="ammenitystorage" id="ammenitystorage" checked>
                                @endif
                                <label class="form-check-label" for="ammenitystorage">
                                    Storage
                                </label>
                            </div>
                            <div class="form-check">
                                @if($data['listing']->elevator==NULL)
                                <input class="form-check-input" type="checkbox" name="ammenityelevator" value="ammenityelevator" id="ammenityelevator">
                                @else
                                <input class="form-check-input" type="checkbox" name="ammenityelevator" value="ammenityelevator" id="ammenityelevator" checked>
                                @endif
                                <label class="form-check-label" for="ammenityelevator">
                                    Elevator
                                </label>
                            </div>
                            <div class="form-check">
                                @if($data['listing']->washer==NULL)
                                <input class="form-check-input" type="checkbox" value="ammenitywasher" name="ammenitywasher" id="ammenitywasher" >
                                @else
                                <input class="form-check-input" type="checkbox" value="ammenitywasher" name="ammenitywasher" id="ammenitywasher" checked >
                                @endif
                                <label class="form-check-label" for="ammenitywasher">
                                    Washer/Dryer
                                </label>
                            </div>
                            <div class="form-check">
                                @if($data['listing']->natural_lighting==NULL)
                                <input class="form-check-input" type="checkbox" value="ammenitynatural" name="ammenitynatural" id="ammenitynatural">
                                @else
                                <input class="form-check-input" type="checkbox" value="ammenitynatural" name="ammenitynatural" id="ammenitynatural" checked>
                                @endif
                                <label class="form-check-label" for="ammenitynatural">
                                    Natural lighting
                                </label>
                            </div>
                            <div class="form-check">
                                @if($data['listing']->laundry_room==NULL)
                                <input class="form-check-input" type="checkbox" value="ammenitylaundry" name="ammenitylaundry" id="ammenitylaundry" >
                                @else
                                <input class="form-check-input" type="checkbox" value="ammenitylaundry" name="ammenitylaundry" id="ammenitylaundry" checked>
                                @endif
                                <label class="form-check-label" for="ammenitylaundry">
                                    Laundry Room
                                </label>
                            </div>                            
                            <div class="form-check">
                                @if($data['listing']->high_ceiling==NULL)
                                <input class="form-check-input" type="checkbox" value="ammenityhighceiling" name="ammenityhighceiling" id="ammenityhighceiling">
                                @else
                                <input class="form-check-input" type="checkbox" value="ammenityhighceiling" name="ammenityhighceiling" id="ammenityhighceiling" checked>
                                @endif
                                <label class="form-check-label" for="ammenityhighceiling">
                                    High Ceiling
                                </label>
                            </div>

                        </div>
                        <div class="col-md-6 ">
                            <div class="col-md-6">
                                <label for="policypet">Pet Policy</label> 
                            </div>
                            @if($data['listing']->pet_policy =='nopets')
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="petpolicy" id="petpolicy" value="petsallowed">
                                <label class="form-check-label" for="petpolicy">Pets allowed</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="petpolicy" id="petpolicy" value="nopets" checked>
                                <label class="form-check-label" for="petpolicy">No pets</label>
                            </div>
   
                            @else
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="petpolicy" id="petpolicy" value="petsallowed" checked>
                                <label class="form-check-label" for="petpolicy">Pets allowed</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="petpolicy" id="petpolicy" value="nopets" >
                                <label class="form-check-label" for="petpolicy">No pets</label>
                            </div>
                            @endif

                            <span class="invalid-feedback" role="alert">
                            @error('petpolicy')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-12">
                                <label for="mainimage">Main Property Image</label>
                                <input type="file" class="form-control @error('mainimage') is-invalid @enderror" id="img" value="{{old('mainimage')}}"  name="mainimage">
                                <span class="invalid-feedback" role="alert">
                                @error('mainimage')
                                    <strong>{{ $message }}</strong>
                                    @enderror
                                </span>  
                        </div>
                        <div class="col-md-6">
                            <h4>Current Image</h4> 
                            @if($data['listing']->mainphoto)
                            <img src="{{$data['listing']->mainphoto}}" alt="Product Image" height='400px' width='350px'>
                            @endif
                        </div>
                        <div class="col-md-6" >
                            <h4>New Image</h4> 
                            <div id="selectedBanner">
                            
                            </div>

                        </div>
                        <div class="col-md-12">
                            <a href="{{url('editimages/'.$data['listing']->property_id)}}">
                               View/edit other Images
                            </a>
                        </div>
                        <div class="col-md-12" style="margin-top: 6%;">
                            <button type="submit" class="btn btn-dark buttongoproduct">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="text-center d-flex justify-content-center">
        </div>
</div>
@endif

@endsection