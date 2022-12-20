@extends('layouts.client')
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
            <form method="POST" action="">
                @csrf
                <div class="container">
                <div class="row">
                    <h3>Personal Details</h3>
                        <div class="col-md-12 formhousevisitfield">
                            <div class="col-md-12">
                                <label for="proddescr">Sell or Lease out?</label> 
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="sell" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">Sell</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="leaseout" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault1">Lease Out</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="rentalandsale" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault1">Rental/ For Sale</label>
                            </div>
                            <span class="invalid-feedback" role="alert">
                            @error('proddescr')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 formhousevisitfield">
                            <label for="prodname">First Name</label>
                            
                            <input id="prodname" type="text" class="form-control @error('prodname') is-invalid @enderror"   name="prodname" value="{{ old('prodname')}}" autocomplete="prodname" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('prodname')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 formhousevisitfield">
                            <label for="proddescr">Last Name</label> 
                            <input id="prodname" type="text" class="form-control @error('prodname') is-invalid @enderror"  name="prodname" value="{{ old('prodname')}}" autocomplete="prodname" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('proddescr')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-12 formhousevisitfield">
                            <label for="prodprice">Email</label>
                            <input id="email" type="text" class="form-control @error('prodname') is-invalid @enderror"  name="prodname" value="{{ old('prodname')}}" autocomplete="prodname" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('prodprice')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>   
                        </div>
                        <div class="col-md-12 formhousevisitfield">
                            <label for="prodquan">Phone</label>
                            <input type="number" class="form-control @error('prodquan') is-invalid @enderror"  name="prodquan" value="{{ old('prodquan')}}">
                            <span class="invalid-feedback" role="alert">
                            @error('prodquan')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>  
                        </div>
                        <h3>House Details</h3>
                        <div class="col-md-6">
                            <label for="proddescr">House Type</label> 
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Apartment</option>
                                <optgroup label="Houses">
                                    <option value="volvo">Bungalow</option>
                                    <option value="saab">Town House</option>
                                    <option value="saab">Mansion</option>
                                    <option value="saab">Villa</option>
                                    <option value="saab">Ranch House</option>
                                    <option value="">Condominium</option>
                                </optgroup>
                                <optgroup label="Land">
                                    <option value="volvo">Residential</option>
                                    <option value="saab">Commercial Land</option>
                                </optgroup>
                                <optgroup label="Commercial Property">
                                    <option value="volvo">Warehouses</option>
                                    <option value="saab">Shops</option>
                                    <option value="volvo">Offices</option>
                                </optgroup>
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
                        <div class="col-md-6  formhousevisitfield">
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
            
                        <div class="col-md-12" style="margin-top: 6%;">
                            <div class="form-check">
                                <label class="form-check-label" for="defaultCheck1">
                                    Confirm You Have Read Our <a href="">Terms and Policies </a>
                                </label>    
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            </div>
                            <button type="submit" class="btn btn-dark buttongoproduct">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection  
