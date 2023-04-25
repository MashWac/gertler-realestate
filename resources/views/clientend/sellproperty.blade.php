@extends('layouts.client')
@section('metatags')

<title> Sell property in Kenya. Schedule appointment with the best Realtors in Kenya, {{config('app.name', 'Gertler-Investment')}}</title>
<meta name="description" content="Find the best and most affordable property in Kenya. Buy, rent and sell property in Kenya.{{config('app.name', 'Gertler-Investment')}}">
<meta name="robots" content="index">

@endsection
@section('content')
<div class="housepageview">
    <div class="producttitlemain">
        <h1 class="producttitlemaintext">
            The Fastest & Easiest Way to Sell Your Property
        </h1>
    </div>
    <div class="revealhouse sellformhouse">
        <div class="revealhouse formhousesell">  
            <h2 class="formtitlehouse">
                GET IN TOUCH TO SELL YOUR PROPERTY.
            </h2>
            <form method="POST" action="{{url('sellrequest')}}" enctype="multipart/form-data">
                @csrf
                <div class="container">
                <div class="row">
                    <h3>Fill In Your Details</h3>
                        <div class="col-md-6 formhousevisitfield">
                            <label for="sellerfname">First Name</label>
                            <input id="sellerfname" type="text" class="form-control @error('sellerfname') is-invalid @enderror"   name="sellerfname" value="{{ old('sellerfname')}}" autocomplete="sellerfname" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('sellerfname')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 formhousevisitfield">
                            <label for="sellerlname">Last Name</label> 
                            <input id="sellerlname" type="text" class="form-control @error('sellerlname') is-invalid @enderror"  name="sellerlname" value="{{ old('sellerlname')}}" autocomplete="sellerlname" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('sellerlname')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 formhousevisitfield">
                            <label for="selleremail">Email</label>
                            <input id="selleremail" type="email" class="form-control @error('selleremail') is-invalid @enderror"  name="selleremail" value="{{ old('selleremail')}}" autocomplete="selleremail" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('selleremail')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>   
                        </div>
                        <div class="col-md-6 formhousevisitfield ">
                            <div class="col-md-6">
                                <label for="sellercountrycode">
                                    Country Code
                                </label>
                                <select name="sellercountrycode" class="form-select" aria-label="Default select example">
                                    @foreach($data['countries'] as $item)
                                    <option value="{{$item->phonecode}}"  {{ old('sellercountrycode') == $item->phonecode ? 'selected' : '' }}>+{{$item->phonecode}} | {{$item->name}}</option>
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
                        <div class="col-md-12 formhousevisitfield">
                            <label for="propertydescription">Property Description</label> 
                            <textarea class="form-control @error('propertydescription') is-invalid @enderror" name="propertydescription" id="propertydescription"autocomplete="propertydescription" autofocus> {{ old('propertydescription')}}</textarea>
                            <span class="invalid-feedback" role="alert">
                            @error('propertydescription')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 formhousevisitfield">
                            <label for="housetype">Property Type</label> 
                            <select name="housetype" class="form-select" value="{{ old('housetype')}}" aria-label="Default select example">
                                <option value="apartment"  {{ old('housetype') == 'apartment' ? 'selected' : '' }}>Apartment</option>
                                <optgroup label="Houses">
                                    <option value="bungalow" {{ old('housetype') == 'bungalow' ? 'selected' : '' }}>Bungalow</option>
                                    <option value="townhouse"  {{ old('housetype') == 'townhouse' ? 'selected' : '' }}>Town House</option>
                                    <option value="mansion" {{ old('housetype') == 'mansion' ? 'selected' : '' }}>Mansion</option>
                                    <option value="villa" {{ old('housetype') == 'villa' ? 'selected' : '' }}>Villa</option>
                                    <option value="ranchhouse" {{ old('housetype') == 'ranchhouse' ? 'selected' : '' }}>Ranch House</option>
                                    <option value="condominium"  {{ old('housetype') == 'condominium' ? 'selected' : '' }}>Condominium</option>
                                </optgroup>
                                <optgroup label="Land">
                                    <option value="residentialland"  {{ old('housetype') == 'buy' ? 'selected' : '' }}>Residential</option>
                                    <option value="commercialland"  {{ old('housetype') == 'buy' ? 'selected' : '' }}>Commercial Land</option>
                                </optgroup>
                                <optgroup label="Commercial Property">
                                    <option value="warehouse" {{ old('housetype') == 'residentialland' ? 'selected' : '' }}>Warehouses</option>
                                    <option value="shop" {{ old('housetype') == 'shop' ? 'selected' : '' }}>Shops</option>
                                    <option value="office"  {{ old('housetype') == 'office' ? 'selected' : '' }}>Offices</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-6 formhousevisitfield">
                            <label for="listingtype">Listing type</label> 
                            <select class="form-select" name="listingtype" value="{{old('listingtype')}}"aria-label="Default select example">
                                <option value="buy" {{ old('listingtype') == 'buy' ? 'selected' : '' }}>Buy</option>
                                <option value="rent"  {{ old('listingtype') == 'rent' ? 'selected' : '' }}>Rent</option>
                                <option value="buyrent"  {{ old('listingtype') == 'buyrent' ? 'selected' : '' }}>Buy or Rent </option>
                            </select>
                        </div>
                        <div class="col-md-6 formhousevisitfield">
                            <label for="propertyaddress">Street</label>
                            
                            <input id="propertyaddress" type="text" class="form-control @error('propertyaddress') is-invalid @enderror"   name="propertyaddress" value="{{ old('propertyaddress')}}" autocomplete="propertyaddress" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('propertyaddress')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 formhousevisitfield">
                            <label for="countylocate">County</label>
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
                        <div class="col-md-6 formhousevisitfield">
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
                        <div class="col-md-6 formhousevisitfield">
                            <label for="propertybedrooms">Total Bedrooms</label>
                            <input type="number" class="form-control @error('propertybedrooms') is-invalid @enderror"  name="propertybedrooms" value="{{ old('propertybedrooms')}}">
                            <span class="invalid-feedback" role="alert">
                            @error('propertybedrooms')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>  
                        </div>
                        <div class="col-md-6 formhousevisitfield">
                            <label for="propertybathrooms">Total Bathrooms</label>
                            <input type="number" class="form-control @error('propertybathrooms') is-invalid @enderror"  name="propertybathrooms" value="{{ old('propertybathrooms')}}">
                            <span class="invalid-feedback" role="alert">
                            @error('propertybathrooms')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>  
                        </div>
                        <div class="col-md-12 formhousevisitfield">

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
                        <div class="col-md-6 formhousevisitfield">
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
            
                        <div class="col-md-12" style="margin-top: 6%;">
                            <button type="submit" class="btn btn-dark buttongoproduct">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection  



