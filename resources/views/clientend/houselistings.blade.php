@extends('layouts.client')
@section('content')
<div class="landinghousesection">

</div>
<div class="mainview">
    <div class=" filtersection">
        <div class="formsection">
                <div id="formbuy" style="display:inline;">
                    <form method="GET" action="{{url('filterproperties')}}">
                        @csrf
                        <div> 
                            <span class="invalid-feedback" role="alert">
                            @error('selectedlocation')<strong>{{ $message }}</strong>@enderror
                            </span>                       
                            <input class="form-control filterinputs @error('selectedlocation') is-invalid @enderror" name="selectedlocation"list="datalistOptions" style="width: 200px;" id="exampleDataList" placeholder="Type to search...">
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
    <div class="houselistingsection" style="margin-top: 10%;">
    @if($data['count']>0)
    @foreach($data['listings'] as $item)
        <div class=" houselist">
            <div class="houseimage">
                <img src="{{$item->mainphoto}}" class="houseimages" alt="property image">
            </div>
            <div class="housedetails">
                <div class="projectname housedetailsect">
                    <h3 class="housetitles"> Project Name</h3>
                    <p>{{$item->property_name}}</p>
                </div>
                <div class="housetype housedetailsect">
                    <h3 class="housetitles"> Type</h3>
                    <p>{{$item->house_type}}</p>
                </div>
                <div class="houseaddress housedetailsect">
                    <h3 class="housetitles"> Address</h3>
                    <p>{{$item->full_address}}</p>
                </div>
                <div class="housedetailsect">
                    @if($item->total_bedrooms != NULL)
                    <div class="housepace">
                        <h3 class="housetitles">Bedrooms </h3>
                        <p> {{$item->total_bedrooms}}</p>
                    </div>
                    @endif
                    @if($item->total_bathrooms != NULL)
                    <div class="housepace">
                        <h3 class="housetitles"> Bathrooms</h3>
                        <p>{{$item->total_bathrooms}}</p>
                    </div>
                    @endif
                    @if($item->square_feet != NULL)
                    <div class="housepace">
                        <h3 class="housetitles"> SqFt</h3>
                        <p>{{$item->square_feet}}</p>
                    </div>
                    @endif
                    @if($item->acreage != NULL)
                    <div class="housepace">
                        <h3 class="housetitles"> Acres</h3>
                        <p>{{$item->acreage}}</p>
                    </div>
                    @endif
                    @if($item->floor != NULL)
                    <div class="housepace">
                        <h3 class="housetitles"> Floors</h3>
                        <p>{{$item->floor}}</p>
                    </div>
                    @endif
            

                </div>
                <div class="Price housedetailsect">
                    <h3 class="housetitles"> Price</h3>
                    <p>KSH {{$item->starting_price}} 
                        @if($item->end_price != NULL)
                        - {{$item->end_price}} 
                        @endif
                    </p>
                    <a href="{{url('houseview/'.$item->property_id)}}">
                        @if($item->listing_type=='buy')
                        <button class="btn btn-dark buttongoproduct">BUY</button>   
                        @elseif($item->listing_type=='rent')
                        <button class="btn btn-dark buttongoproduct">RENT</button>
                        @else
                        <button class="btn btn-dark buttongoproduct">BUY/RENT</button>
                        @endif  
                    </a>
                </div>
                <div>
                    
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="emptyquery container-fluid" style="width: 100%;">
            <div class="row" style="width: 95%;">
                <div class="text-center">
                <h2 class="emptyqueryheader">
                    SORRY NO PROPERTIES FOUND
                </h2>
                <p >There are no properties with the specifications you have search for. You can change your specifications or <a href="#footercon">Contact Us</a> for assistance.</p>
                </div>
                <ion-icon name="sad-outline" style="font-size: 100px;"></ion-icon>
            </div>
        </div>
        @endif
    </div>
    <div class="text-center d-flex justify-content-center">
        {{ $data['listings']->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection  
