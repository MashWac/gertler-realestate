@extends('layouts.admin')
@section('content')


<div class="card">
        <div class="card-header text-center">
            <h2> Add New Property</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
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
                            @error('proddescr')<strong>{{ $message }}</strong>@enderror
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
                            <label for="proddescr">Listing type</label> 
                            <select class="form-select" aria-label="Default select example">
                                <option value="buy" selected>Buy</option>
                                <option value="rent">Rent</option>
                                <option value="buyrent">Buy or Rent </option>
                                <option value="selling">Brokering</option>
                            </select>
                        </div>
                        <div class="col-md-6 ">
                            <label for="propertyaddress">Full Address</label>
                            
                            <input id="propertyaddress" type="text" class="form-control @error('propertyaddress') is-invalid @enderror"   name="propertyaddress" value="{{ old('propertyaddress')}}" autocomplete="propertyaddress" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('propertyaddress')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="proddescr">Location</label> 
                            <input id="prodname" type="text" class="form-control @error('prodname') is-invalid @enderror"  name="prodname" value="{{ old('prodname')}}" autocomplete="prodname" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('proddescr')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="proddescr">Neighbourhood</label> 
                            <input id="prodname" type="text" class="form-control @error('prodname') is-invalid @enderror"  name="prodname" value="{{ old('prodname')}}" autocomplete="prodname" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('proddescr')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-3 ">
                            <label for="propertystartprice">Starting Price:</label> 
                            <input id="propertystartprice" type="number" class="form-control @error('propertystartprice') is-invalid @enderror" min="0" name="propertystartprice" value="{{ old('propertystartprice')}}" autocomplete="propertystartprice" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('proddescr')<strong>{{ $message }}</strong>@enderror
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
                            <input id="acreage" type="number" class="form-control @error('acreage') is-invalid @enderror"  name="acreage" value="{{ old('acreage')}}" autocomplete="acreage" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('acreage')<strong>{{ $message }}</strong>@enderror
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
                                <label for="proddescr">Pet Policy</label> 
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
                                <input type="file" class="form-control @error('mainimage') is-invalid @enderror" id="img"  name="mainimage">
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
                            <input type="file" class="form-control @error('otherimages') is-invalid @enderror" multiple id="gallery-photo-add">
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
<div class="card">
        <div class="card-header text-center">
            <h2> Edit Property</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
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
                            @error('proddescr')<strong>{{ $message }}</strong>@enderror
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
                            <label for="proddescr">Listing type</label> 
                            <select class="form-select" aria-label="Default select example">
                                <option value="buy" selected>Buy</option>
                                <option value="rent">Rent</option>
                                <option value="buyrent">Buy or Rent </option>
                                <option value="selling">Brokering</option>
                            </select>
                        </div>
                        <div class="col-md-6 ">
                            <label for="propertyaddress">Full Address</label>
                            
                            <input id="propertyaddress" type="text" class="form-control @error('propertyaddress') is-invalid @enderror"   name="propertyaddress" value="{{ old('propertyaddress')}}" autocomplete="propertyaddress" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('propertyaddress')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="proddescr">Location</label> 
                            <input id="prodname" type="text" class="form-control @error('prodname') is-invalid @enderror"  name="prodname" value="{{ old('prodname')}}" autocomplete="prodname" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('proddescr')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 ">
                            <label for="proddescr">Neighbourhood</label> 
                            <input id="prodname" type="text" class="form-control @error('prodname') is-invalid @enderror"  name="prodname" value="{{ old('prodname')}}" autocomplete="prodname" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('proddescr')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-3 ">
                            <label for="propertystartprice">Starting Price:</label> 
                            <input id="propertystartprice" type="number" class="form-control @error('propertystartprice') is-invalid @enderror" min="0" name="propertystartprice" value="{{ old('propertystartprice')}}" autocomplete="propertystartprice" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('proddescr')<strong>{{ $message }}</strong>@enderror
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
                            <input id="acreage" type="number" class="form-control @error('acreage') is-invalid @enderror"  name="acreage" value="{{ old('acreage')}}" autocomplete="acreage" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('acreage')<strong>{{ $message }}</strong>@enderror
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
                                <label for="proddescr">Pet Policy</label> 
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
                                <input type="file" class="form-control @error('mainimage') is-invalid @enderror" id="img"  name="mainimage">
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
                            <input type="file" class="form-control @error('otherimages') is-invalid @enderror" multiple id="gallery-photo-add">
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

@endsection