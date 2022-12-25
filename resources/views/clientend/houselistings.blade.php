@extends('layouts.client')
@section('content')
<div class="landinghousesection">

</div>
<div class="mainview">
    <div class=" filtersection">
        <div class="filteroptions">
            <ul>
                <li class="formswitchbutton" ><button id="buyform" class="btn btn-dark buttonswitch" style="background-color:#FFB673 ;" onclick="showbuy()">Buy</button></li>
                <li class="formswitchbutton" ><button id="rentform" class="btn btn-dark buttonswitch" onclick="showrent()">Rent</button></li>
            </ul>
        </div>
        <div class="formsection">
            <div class="card w-100 actualform">
                <div id="formbuy" style="display:inline;">
                    <form method="POST" action="reguser"  enctype="multipart/form-data">
                        @csrf
                        <select name="cars" class="form-select filterinputs"id="cars" aria-placeholder="Category">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                        <select name="cars" class="form-select filterinputs"id="cars" aria-placeholder="Category">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                        <select name="cars" class="form-select filterinputs"id="cars" aria-placeholder="Category">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>

                        <input type="text" class="form-control filterinputs" placeholder="Location">
                        <input type="number" class="form-control filterinputs" placeholder="Minimum price">
                        <input type="number" class="form-control filterinputs" placeholder="Maximum Price">
                        <button type="submit" class="btn filtersbutton" style="float: left;">Search</button>
                    </form>
                </div>
                <div class="card w-100 actualform"id="formrent" style="border:none; display:none;">
                    <form method="POST" action="{{url('reguser')}} "  enctype="multipart/form-data">
                        @csrf
                        <select name="cars" class="form-select filterinputs"id="cars" aria-placeholder="Category">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                        <select name="cars" class="form-select filterinputs"id="cars" aria-placeholder="Category">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                        <select name="cars" class="form-select filterinputs"id="cars" aria-placeholder="Category">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>

                        <input type="text" class="form-control filterinputs" placeholder="Location">
                        <input type="number" class="form-control filterinputs" placeholder="Minimum price">
                        <input type="number" class="form-control filterinputs" placeholder="Maximum Price">
                        <button type="submit" class="btn filtersbutton" style="float: left;">Search</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="houselistingsection">
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
    </div>
</div>
@endsection  
