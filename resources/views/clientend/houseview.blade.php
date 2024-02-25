@extends('layouts.client')
@section('metatags')

<title>For @if($data['property']->listing_type=='buyrent') Sale/Rent @elseif($data['property']->listing_type=='buy') Sale @elseif($data['property']->listing_type=='rent') Rent @endif: {{$data['property']->property_name}}@if($data['property']->total_bedrooms!= NULL) | {{$data['property']->total_bedrooms}} BedRooms @endif @if($data['property']->acreage!= NULL) | {{$data['property']->acreage}} Acre(s) @endif| Located in {{$data['property']->neighborhood}}  by {{config('app.name', 'Gertler Investment Limited')}}</title>
<meta name="description" content="{{$data['property']->property_name.' in '.$data['property']->neighborhood.','.$data['property']->location.'. '.'Pricing starting from KSH '.$data['property']->starting_price}}">
<meta name="robots" content="index">

    <script type="application/ld+json">
    {
    "@context": "https://schema.org/",
    "@type": "property",
    "name": {!! json_encode($data['property']['property_name']) !!}{!! json_encode($data['property']['neighborhood']) !!}{!!'-'. json_encode($data['property']['location']) !!},
    "image": {!! json_encode($data['property']['mainphoto']) !!},
    "description": {!! json_encode($data['property']['description']) !!},
    "brand": {
        "@type": "Brand",
        "name": {!! json_encode(config('app.name', 'Gertler Investment Limited')) !!}
    },
    "mpn": {!! json_encode($data['property']['part']) !!},
    "offers": {
        "@type": "AggregateOffer",
        "url": {!! json_encode(url()->current()) !!},
        "priceCurrency": {!! json_encode(session('session_currency')) !!},
        "lowPrice": "{!! json_encode($data['property']['starting_price']) !!}",
        "highPrice": "{!! json_encode($data['property']['end_price']) !!}",
    }
    }
    </script>

@endsection
@section('content')
<div class="housepageview">
    <div class="producttitlemain">
        <h1 class="producttitlemaintext"> {{$data['property']->property_name}}</h1>
    </div>

    <div class="houseimagescarousel">
    <img src="{{$data['property']->mainphoto}} " alt="{{$data['property']->property_name}}" class="imageshouseview">
    </div>
    <div class="housefeatures">
        <ul class="listfeatures">
            <li>
                <div class="featureshouse">
                    <h3 class="featuretitle">Price</h3>
                    <p class="featureinfo"> KSH {{number_format($data['property']->starting_price)}}  
						@if($data['property']->end_price != NULL)
                        to KSH{{number_format($data['property']->end_price)}} 
                        @endif</p>
                </div>
            </li>
            <li> 
                <div class="featureshouse">
                    <h3 class="featuretitle">County</h3>
                    <p class="featureinfo"> {{$data['property']->location}} </p>
                </div>
            </li>
            <li> 
                <div class="featureshouse">
                    <h3 class="featuretitle">Neighbourhood</h3>
                    <p class="featureinfo"> {{$data['property']->neighborhood}} </p>
                </div>
            </li>
            @if($data['property']->square_feet!= NULL)
            <li>
                <div class="featureshouse">
                    <h3 class="featuretitle">SqM</h3>
                    <p class="featureinfo">{{$data['property']->square_feet}} </p>
                </div>
            </li>
            @endif
            @if($data['property']->floor!= NULL || $data['property']->floor!=0)
            <li>
                <div class="featureshouse">
                    <h3 class="featuretitle">Floor</h3>
                    <p class="featureinfo">{{$data['property']->floor}} </p>
                </div>
            </li>
            @endif
            @if($data['property']->total_bedrooms!= NULL)
            <li>
                <div class="featureshouse">
                    <h3 class="featuretitle">Total Bedrooms</h3>
                    <p class="featureinfo">{{$data['property']->total_bedrooms}} </p>
                </div>
            </li>
            @endif
            @if($data['property']->acreage!= NULL)
            <li>
                <div class="featureshouse">
                    <h3 class="featuretitle">Acreage</h3>
                    <p class="featureinfo">{{$data['property']->acreage}} </p>
                </div>
            </li>
            @endif
            <li>
                <div class="featureshouse">
                    <h3 class="featuretitle">House Type</h3>
                    <p class="featureinfo">{{$data['property']->house_type}} </p>
                </div>
            </li>
        </ul>
    </div>
    <div class="reveal abouthousedetails">
        <div class="abouthousedetailstext">
            <h2 class="abouthousetitle" style="font-size: 20px;">About the property</h2>
            <p class="abouthousetitleparagraph">
			{!!$data['property']->property_description!!}
            </p>
        </div>
        <div class="abouthousedetailsicons">
            <div class="ammenities">
                @if($data['property']->doorman != NULL)
                    <div class="text-start houseiconsdetails" style="position: relative;height:70px; width:100px">
                        <h3 class="housetitles" >Doorman</h3>
                        <div class="houseicondetails" style="position: absolute;bottom:0%; left:40%">
                            <i class="fa-solid fa-person-military-pointing fa-xl"></i>
                        </div> 
                    </div> 
                @endif
                @if($data['property']->storage != NULL)
                <div class="text-start houseiconsdetails"  style="position: relative;height:70px; width:100px">
                        <h3 class="housetitles" >Storage </h3>
                        <div class="houseicondetails" style="position: absolute;bottom:0%; left:40%">
                            <i class="fa-solid fa-door-open fa-xl"></i>
                        </div> 
                    </div> 
                @endif
                @if($data['property']->elevator != NULL)
                <div class="text-start houseiconsdetails"  style="position: relative;height:70px; width:100px">
                        <h3 class="housetitles" >Elevator</h3>
                        <div class="houseicondetails" style="position: absolute;bottom:0%; left:40%">
                            <i class="fa-solid fa-elevator fa-xl"></i>
                        </div> 
                    </div> 
                @endif
                @if($data['property']->washer != NULL)
                <div class="text-start houseiconsdetails"  style="position: relative;height:70px; width:100px">
                        <h3 class="housetitles" >Washer/Dryer </h3>
                        <div class="houseicondetails" style="position: absolute;bottom:0%; left:40%">
                            <i class="fa-solid fa-soap fa-xl"></i>
                             </div> 
                    </div> 
                @endif
                @if($data['property']->natural_lighting != NULL)
                <div class="text-start houseiconsdetails"  style="position: relative;height:70px; width:100px">
                        <h3 class="housetitles" >Natural Lighting </h3>
                        <div class="houseicondetails" style="position: absolute;bottom:0%; left:40%">
                            <i class="fa-regular fa-sun fa-xl"></i>
                        </div> 
                    </div> 
                @endif
                @if($data['property']->high_ceiling != NULL)
                <div class="text-start houseiconsdetails"  style="position: relative;height:70px; width:100px">
                        <h3 class="housetitles" >High Ceiling</h3>
                        <div class="houseicondetails" style="position: absolute;bottom:0%; left:40%">
                            <i class="fa-solid fa-hanukiah fa-xl"></i>
                        </div> 
                    </div> 
                @endif
                @if($data['property']->laundry_room != NULL)
                <div class="text-start houseiconsdetails"  style="position: relative;height:70px; width:100px">
                        <h3 class="housetitles" >Laundry Room </h3>
                        <div class="houseicondetails" style="position: absolute;bottom:0%; left:40%">
                            <i class="fa-solid fa-jug-detergent fa-xl"></i>
                        </div> 
                    </div> 
                @endif
                @if($data['property']->pet_policy != 'nopets')
                <div class="text-start houseiconsdetails"  style="position: relative;height:70px; width:100px">
                        <h3 class="housetitles" >Pets Allowed </h3>
                        <div class="houseicondetails" style="position: absolute;bottom:0%; left:40%">
                            <i class="fa-solid fa-paw fa-xl"></i>
                        </div> 
                    </div> 
                @endif
            </div>

        </div>
    </div>
	<div class="container imagessection">
        <div class="imagecon">
            @foreach($data['images'] as $item)
            <div class="reveal imagesproperty exprop">
                <img src="{{$item->image_url}} " alt="property_image" class="extraimages">
            </div>
            @endforeach
        </div>
        <div class="popup-image">
            <span class="times">&times;</span>
            <img src="{{$data['property']->mainphoto}} " alt="property_image" class="extraimages">
        </div>
	</div>
    
    <div class="reveal visitformhouse">
        <div class="reveal formhousevisit">
            <h2 class="formtitlehouse">
                Interested in this property?
            </h2>
            <h4>
                Share your details to schedule a property viewing or Call/Whatsapp on +254(0)712054154
            </h4>
            <form method="POST" action="{{url('interested/'.$data['property']->listing_type)}}">
                @csrf
                <div class="container-fluid">
                    <div class="row ">
                        <input type="hidden" name="propid" value="{{$data['property']->property_id}}">
                        <div class="col-md-6 formhousevisitfield">
                            <label for="sellerfname">First Name</label>
                            <input id="sellerfname" type="text" class="form-control @error('sellerfname') is-invalid @enderror houseviewtext "   name="sellerfname" value="{{ old('sellerfname')}}" autocomplete="sellerfname" >
                            <span class="invalid-feedback" role="alert">
                            @error('sellerfname')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 formhousevisitfield">
                            <label for="sellerlname">Last Name</label> 
                            <input id="sellerlname" type="text" class="form-control @error('sellerlname') is-invalid @enderror houseviewtext"  name="sellerlname" value="{{ old('sellerlname')}}" autocomplete="sellerlname" >
                            <span class="invalid-feedback" role="alert">
                            @error('sellerlname')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-6 formhousevisitfield">
                            <label for="selleremail">Email</label>
                            <input id="selleremail" type="email" class="form-control @error('selleremail') is-invalid @enderror houseviewtext"  name="selleremail" value="{{ old('selleremail')}}" autocomplete="selleremail" >
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
                                <select name="sellercountrycode" class="form-select houseviewtext" aria-label="Default select example">
                                    @foreach($data['countries'] as $item)
                                    <option value="{{$item->phonecode}}"  {{ old('sellercountrycode') == $item->phonecode ? 'selected' : '' }}>+{{$item->phonecode}} | {{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <label for="sellerphone">Phone</label>
                            <input type="number" class="form-control @error('sellerphone') is-invalid @enderror houseviewtext"  name="sellerphone" value="{{ old('sellerphone')}}">
                            <span class="invalid-feedback" role="alert">
                            @error('sellerphone')
                                <strong>{{ $message }}</strong>
                                @enderror
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
