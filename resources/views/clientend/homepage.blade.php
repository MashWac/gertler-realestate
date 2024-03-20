@extends('layouts.landing')
@section('metatags')
<title>Buy, Rent and Sell Property in Kenya.Explore Prime Real Estate Opportunities in Nairobi | Gertler Investment Limited {{config('app.name', 'Gertler Investment Limited')}} </title>
<meta name="description" content="Find the best property in Kenya. Buy, rent and sell property in Kenya. Start your property search now with Gertler Investment Limited. Browse our listings and find your perfect home or investment. Get a free property valuation from Gertler Investment Limited. We'll help you determine the true market value of your property. Invest in Nairobi's booming property market with Gertler Investment Limited. We offer a wide range of investment properties in prime locations across the city. Learn more from blogs by {{config('app.name', 'Gertler Investment Limited')}}">
@endsection
@section('content')
    <video width="100%" class="d-none d-md-block" autoplay muted loop id="myVideo">
        <source src="/assets/staticimg/final7.mp4" type="video/mp4">
    </video>
    <video width="100%" class="d-block d-sm-block d-md-none" autoplay muted loop id="myVideo">
        <source src="/assets/staticimg/final10.mp4" type="video/mp4">
    </video>
    <div class="landingback">
    
        <div class="landingtext d-none d-lg-block d-xl-block">
            <h1 class='landertext'>YOUR NEXT INVESTMENT IS RIGHT HERE</h1>
        </div>
        <div class="landingoptions d-none d-lg-block d-xl-block">
            <a href="{{url('properties-in-kenya/buy')}}"><div class="glass_con text-center homelandoptions"><p>BUY</p></div></a>
            <a href="{{url('properties-in-kenya/rent')}}"><div class="glass_con text-center homelandoptions"><p>RENT</p></div></a>
            <a href="{{url('contact_for_sale')}}"><div class="glass_con text-center homelandoptions"><p>SELL</p></div></a>
        </div>
        <div class="landingtext2 d-block d-sm-block d-lg-none">
            <h1 class='landertext2'>YOUR NEXT INVESTMENT IS RIGHT HERE</h1>
        </div>
        <div class="landingoptions2 d-block d-sm-block d-lg-none">
            <a href="{{url('properties-in-kenya/buy')}}"><div class="glass_con2 text-center homelandoptions2"><p>BUY</p></div></a>
            <a href="{{url('properties-in-kenya/rent')}}"><div class="glass_con2 text-center homelandoptions2"><p>RENT</p></div></a>
            <a href="{{url('contact_for_sale')}}"><div class="glass_con2 text-center homelandoptions2"><p>SELL</p></div></a>
        </div>
    </div>

    <div class="reveal text-center"> 
        <h4 class="entice_text">"Find apartments,homes, land and much more. Available to buy, rent and lease in Kenya."<br>Hot listings this month</h4>

    </div>
    <div class="section_divider_home"> 
        <div class="section_divider_line"> </div>
    </div>

    <div class="reveal forsale">
        <div id="filterbar" class="filterbar text-center">
            <ul id="filters">
                <li class="filteropts {{ \Illuminate\Support\Facades\Request::is('/') ? 'active' : ''}}"><a href="{{url('/')}}" >Top Listings</a></li>
                <li class="filteropts {{ \Illuminate\Support\Facades\Request::is('property_type/apartment')? 'active' : ''}}"><a class="toplistingslink" href="{{url('property_type/apartment')}}" >Apartments</a></li>
                <li class="filteropts {{ \Illuminate\Support\Facades\Request::is('property_type/house') ? 'active' : ''}}"><a class="toplistingslink" href="{{url('property_type/house')}}" >Houses</a></li>
                <li class="filteropts {{ \Illuminate\Support\Facades\Request::is('property_type/land') ? 'active' : ''}}"><a class="toplistingslink" href="{{url('property_type/land')}}" >Land</a></li>
                <li class="filteropts {{ \Illuminate\Support\Facades\Request::is('property_type/commercial') ? 'active' : ''}}"><a class="toplistingslink" href="{{url('property_type/commercial')}}" >Commercial</a></li>
            </ul>     
        </div>
        <div id="filterTopsection">
            <div class="card text-center propertieshome">
                @if($data['count']>5)
                <div class="owl-carousel owl-theme">
                @foreach($data['listings'] as $item)
                <div class="card propertyhome item" style="width: 18rem; margin: 2%; float:left; height:550px">
                        <div class="image-container">
                            <a href="{{url('view-property/'.strtolower(str_replace(' ', '-',$item->house_type)).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->location))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->neighborhood))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->property_name))).'/'.$item->property_id)}}">
                                <img src="{{$item->mainphoto}}" class="card-img-top property_card_img img_property " alt="property image" height="210px" >
                            </a>
                        </div>
                            @if($item->listing_type=='buy')
                            <p class="housetypetag">For Sale</p>
                            @elseif($item->listing_type=='rent')
                            <p class="housetypetag">For Rent</p>
                            @else
                            <p class="housetypetag">For Rent/Sale</p>
                            @endif   
                            
                            <div class="card-body">
                                <h5 class="card-title housetitleprop">{{$item->property_name}}</h5>
                                <h6>{{$item->neighborhood}} {{$item->location}}, KENYA.</h6>
                                <h6 class="pricecard_home">KSH{{number_format($item->starting_price)}}
                                    @if($item->end_price != NULL)
                                        to KSH{{number_format($item->end_price)}} 
                                    @endif
                                </h6> 
                                <div class="housefitcontent">
                                    @if($item->total_bedrooms != NULL)
                                        <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">Rooms </h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->total_bedrooms}}</p>
                                                <ion-icon class="homeicon" size="large" name="bed-outline"></ion-icon>
                                            </div> 
                                        </div> 
                                    @endif
                                    @if($item->total_bathrooms != NULL)
                                    <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">Baths </h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->total_bathrooms}}</p>
                                                <i class="fas homeicon fa-shower fa-xl"></i>
                                            </div> 
                                        </div> 
                                    @endif
                                    @if($item->square_feet != NULL)
                                    <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">SqM</h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->square_feet}}</p>
                                                <i class="fas homeicon fa-ruler-combined fa-xl"></i>
                                            </div> 
                                        </div> 
                                    @endif
                                    @if($item->acreage != NULL)
                                    <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">Acreage </h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->acreage}}</p>
                                                <i class="fas homeicon fa-mountain fa-xl"></i>
                                            </div> 
                                        </div> 
                                    @endif
                                    @if($item->floor != NULL)
                                    <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">Floors </h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->floor}}</p>
                                                <i class="far homeicon fa-building fa-xl"></i>
                                            </div> 
                                        </div> 
                                    @endif
                                </div>
                                <div class="buttoncardsection" style="position: absolute; bottom:4%; left:32%;">
                                    <a href="{{url('view-property/'.strtolower(str_replace(' ', '-',$item->house_type)).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->location))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->neighborhood))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->property_name))).'/'.$item->property_id)}}">
                                        <button class="btn btn-dark buttongoproduct">View Property</button>                   
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    @endforeach
                </div>
                @else
                <div class="container">
                    <div class=" justify-content-center">
                    @foreach($data['listings'] as $item)
                    <div class="card propertyhome item" style="width: 18rem; margin: 2%; float:left; height:550px">
                    <div class="image-container">
                        <a href="{{url('view-property/'.strtolower(str_replace(' ', '-',$item->house_type)).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->location))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->neighborhood))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->property_name))).'/'.$item->property_id)}}">
                            <img src="{{$item->mainphoto}}" class="card-img-top property_card_img img_property " alt="property image" height="210px" >
                        </a>
                    </div>
                            @if($item->listing_type=='buy')
                            <p class="housetypetag">For Sale</p>
                            @elseif($item->listing_type=='rent')
                            <p class="housetypetag">For Rent</p>
                            @else
                            <p class="housetypetag">For Rent/Sale</p>
                            @endif   
                            
                            <div class="card-body">
                                <h5 class="card-title housetitleprop">{{$item->property_name}}</h5>
                                <h6>{{$item->neighborhood}} {{$item->location}}, KENYA.</h6>
                                <h6 class="pricecard_home">KSH{{number_format($item->starting_price)}}
                                    @if($item->end_price != NULL)
                                        to KSH{{number_format($item->end_price)}} 
                                    @endif
                                </h6> 
                                <div class="housefitcontent">
                                    @if($item->total_bedrooms != NULL)
                                        <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">Rooms </h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->total_bedrooms}}</p>
                                                <ion-icon class="homeicon" size="large" name="bed-outline"></ion-icon>
                                            </div> 
                                        </div> 
                                    @endif
                                    @if($item->total_bathrooms != NULL)
                                    <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">Baths </h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->total_bathrooms}}</p>
                                                <i class="fas homeicon fa-shower fa-xl"></i>
                                            </div> 
                                        </div> 
                                    @endif
                                    @if($item->square_feet != NULL)
                                    <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">SqM</h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->square_feet}}</p>
                                                <i class="fas homeicon fa-ruler-combined fa-xl"></i>
                                            </div> 
                                        </div> 
                                    @endif
                                    @if($item->acreage != NULL)
                                    <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">Acreage </h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->acreage}}</p>
                                                <i class="fas homeicon fa-mountain fa-xl"></i>
                                            </div> 
                                        </div> 
                                    @endif
                                    @if($item->floor != NULL)
                                    <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">Floors </h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->floor}}</p>
                                                <i class="far homeicon fa-building fa-xl"></i>
                                            </div> 
                                        </div> 
                                    @endif
                                </div>
                                <div class="buttoncardsection" style="position: absolute; bottom:4%; left:32%;">
                                    <a href="{{url('view-property/'.strtolower(str_replace(' ', '-',$item->house_type)).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->location))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->neighborhood))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->property_name))).'/'.$item->property_id)}}">
                                        <button class="btn btn-dark buttongoproduct" >View Property</button>                   
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    @endforeach
                        
                    </div>

                </div>
                @endif

                <div class="btnviewall">
                    <a href="{{url('properties-in-kenya/none')}}">
                        <button class="viewalllistings">VIEW ALL LISTINGS</button>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="reveal ourprops text-center ">
        <h2>Our Properties</h2>
    </div>
    <div class="section_divider_home"> 
        <div class="section_divider_line"> </div>
    </div>
    <div class="reveal forsale">
        <div id="filterbar" class="filterbar"class="text-center">
            <ul id="filters">
                <li class="filteropts {{ \Illuminate\Support\Facades\Request::is('/') ? 'active' : ''}}"><a class="filterbyproperties" href="{{url('/')}}" >Featured</a></li>
                @foreach($data['locations'] as $things)
                    <li class="filteropts {{ \Illuminate\Support\Facades\Request::is('located/'.strtolower(str_replace(' ', '-',str_replace('/','|',$things->name))).'/'.$things->location_id) ? 'active' : ''}}"><a class="filterbyproperties" href="{{url('located/'.strtolower(str_replace(' ', '-',str_replace('/','|',$things->name))).'/'.$things->location_id)}}" >{{$things->name}}</a></li>
                @endforeach
            </ul>     
        </div>
        <div id="filterlocationsSection">
            <div class="card text-center propertieshome">
                @if($data['more_count']>5)
                <div class="owl-carousel owl-theme">
                @foreach($data['more_listings'] as $item)
                <div class="card propertyhome item" style="width: 18rem; margin: 2%; float:left; height:550px">
                <div class="image-container">
                <a href="{{url('view-property/'.strtolower(str_replace(' ', '-',$item->house_type)).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->location))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->neighborhood))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->property_name))).'/'.$item->property_id)}}">
                    <img src="{{$item->mainphoto}}" class="card-img-top property_card_img img_property " alt="property image" height="210px" >
                </a>
            </div>
                            @if($item->listing_type=='buy')
                            <p class="housetypetag">For Sale</p>
                            @elseif($item->listing_type=='rent')
                            <p class="housetypetag">For Rent</p>
                            @else
                            <p class="housetypetag">For Rent/Sale</p>
                            @endif   
                            
                            <div class="card-body">
                                <h5 class="card-title housetitleprop">{{$item->property_name}}</h5>
                                <h6>{{$item->neighborhood}} {{$item->location}}, KENYA.</h6>
                                <h6 class="pricecard_home">KSH{{number_format($item->starting_price)}}
                                    @if($item->end_price != NULL)
                                        to KSH{{number_format($item->end_price)}} 
                                    @endif
                                </h6> 
                                <div class="housefitcontent">
                                    @if($item->total_bedrooms != NULL)
                                        <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">Rooms </h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->total_bedrooms}}</p>
                                                <ion-icon class="homeicon" size="large" name="bed-outline"></ion-icon>
                                            </div> 
                                        </div> 
                                    @endif
                                    @if($item->total_bathrooms != NULL)
                                    <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">Baths </h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->total_bathrooms}}</p>
                                                <i class="fas homeicon fa-shower fa-xl"></i>
                                            </div> 
                                        </div> 
                                    @endif
                                    @if($item->square_feet != NULL)
                                    <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">SqM</h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->square_feet}}</p>
                                                <i class="fas homeicon fa-ruler-combined fa-xl"></i>
                                            </div> 
                                        </div> 
                                    @endif
                                    @if($item->acreage != NULL)
                                    <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">Acreage </h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->acreage}}</p>
                                                <i class="fas homeicon fa-mountain fa-xl"></i>
                                            </div> 
                                        </div> 
                                    @endif
                                    @if($item->floor != NULL)
                                    <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">Floors </h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->floor}}</p>
                                                <i class="far homeicon fa-building fa-xl"></i>
                                            </div> 
                                        </div> 
                                    @endif
                                </div>
                                <div class="buttoncardsection" style="position: absolute; bottom:4%; left:32%;">
                                    <a href="{{url('view-property/'.strtolower(str_replace(' ', '-',$item->house_type)).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->location))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->neighborhood))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->property_name))).'/'.$item->property_id)}}">
                                        <button class="btn btn-dark buttongoproduct">View Property</button>                   
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    @endforeach
                </div>
                @else
                <div class="container">
                    <div class=" justify-content-center">
                    @foreach($data['more_listings'] as $item)
                    <div class="card propertyhome item" style="width: 18rem; margin: 2%; float:left; height:550px">
                    <div class="image-container">
                        <a href="{{url('view-property/'.strtolower(str_replace(' ', '-',$item->house_type)).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->location))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->neighborhood))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->property_name))).'/'.$item->property_id)}}">
                            <img src="{{$item->mainphoto}}" class="card-img-top property_card_img img_property " alt="property image" height="210px" >
                        </a>
                    </div>
                            @if($item->listing_type=='buy')
                            <p class="housetypetag">For Sale</p>
                            @elseif($item->listing_type=='rent')
                            <p class="housetypetag">For Rent</p>
                            @else
                            <p class="housetypetag">For Rent/Sale</p>
                            @endif   
                            
                            <div class="card-body">
                                <h5 class="card-title housetitleprop">{{$item->property_name}}</h5>
                                <h6>{{$item->neighborhood}} {{$item->location}}, KENYA.</h6>
                                <h6 class="pricecard_home">KSH{{number_format($item->starting_price)}}
                                    @if($item->end_price != NULL)
                                        to KSH{{number_format($item->end_price)}} 
                                    @endif
                                </h6> 
                                <div class="housefitcontent">
                                    @if($item->total_bedrooms != NULL)
                                        <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">Rooms </h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->total_bedrooms}}</p>
                                                <ion-icon class="homeicon" size="large" name="bed-outline"></ion-icon>
                                            </div> 
                                        </div> 
                                    @endif
                                    @if($item->total_bathrooms != NULL)
                                    <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">Baths </h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->total_bathrooms}}</p>
                                                <i class="fas homeicon fa-shower fa-xl"></i>
                                            </div> 
                                        </div> 
                                    @endif
                                    @if($item->square_feet != NULL)
                                    <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">SqM</h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->square_feet}}</p>
                                                <i class="fas homeicon fa-ruler-combined fa-xl"></i>
                                            </div> 
                                        </div> 
                                    @endif
                                    @if($item->acreage != NULL)
                                    <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">Acreage </h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->acreage}}</p>
                                                <i class="fas homeicon fa-mountain fa-xl"></i>
                                            </div> 
                                        </div> 
                                    @endif
                                    @if($item->floor != NULL)
                                    <div class="text-start houseiconsdetails">
                                            <h3 class="housetitles">Floors </h3>
                                            <div class="houseicondetails">
                                                <p class="valuehomeicon">{{$item->floor}}</p>
                                                <i class="far homeicon fa-building fa-xl"></i>
                                            </div> 
                                        </div> 
                                    @endif
                                </div>
                                <div class="buttoncardsection" style="position: absolute; bottom:4%; left:32%;">
                                    <a href="{{url('view-property/'.strtolower(str_replace(' ', '-',$item->house_type)).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->location))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->neighborhood))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->property_name))).'/'.$item->property_id)}}">
                                        <button class="btn btn-dark buttongoproduct" >View Property</button>                   
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    @endforeach
                        
                    </div>

                </div>
                @endif

                <div class="card" width="100%" style="border: none;">
                    <div class="btnviewall text-center">
                        <a href="{{url('properties-in-kenya/none')}}">
                            <button class="viewalllistings">SEARCH AREA</button>
                        </a>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="localexpertise">
        <div class="reveal localexpertisetext">
            <h2 class="localexpertisetextheader mainsection_title">LOCAL EXPERTISE - GLOBAL CONNECTIONS</h2>
        </div>
        <div class="expertisesection">
            <a href="{{url('properties-in-kenya/none')}}">
                <div class="localexpertiseimage">           
                    <div class="card text-bg-dark image-container_local" style="width:13rem;">
                        <img src="/assets/staticimg/dining2.jpg" class="imgexpertisee card-img" alt="properties" width="100%" height="180px">
                        <div class="card-img-overlay">
                            <h5 class="card-title expertisetexts">Our PROPERTIES</h5>
                        </div>
                    </div>
                </div>  
            </a>
            <a href="{{url('contact_for_sale')}}" class="sellmodal">
                <div class="localexpertiseimage">
                    <div class="card text-bg-dark image-container_local" style="width:13rem;">
                        <img src="/assets/staticimg/executive2.jpg" class=" imgexpertisee card-img" alt="who_are_we" width="100" height="180px">
                        <div class="card-img-overlay">
                            <h5 class="card-title expertisetexts">Sell Property</h5>

                        </div>
                    </div>
                </div>
            </a>
            <a href="" class="newsmodal_local">
                <div class="localexpertiseimage">
                    <div class="card text-bg-dark image-container_local "  style="width:13rem;">
                        <img src="/assets/staticimg/interior1.jpg" class="imgexpertisee card-img" alt="Blogs" width="100%" height="180px">
                        <div class="card-img-overlay">
                            <h5 class="card-title expertisetexts">Newsletter Signup</h5>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{url('find-blogs')}}">
                <div class="localexpertiseimage">
                    <div class="card text-bg-dark image-container_local" style="width:13rem;">
                        <img src="/assets/staticimg/hillhouse.jpg" class="imgexpertisee card-img" alt="Blogs" width="100%" height="180px">
                        <div class="card-img-overlay">
                            <h5 class="card-title expertisetexts">OUR BLOGS</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ url('aboutus') }}">
                <div class="localexpertiseimage">
                    <div class="card text-bg-dark image-container_local" style="width:13rem;">
                        <img src="/assets/staticimg/infinitypool1.jpg" class=" imgexpertisee card-img" alt="who_are_we" width="100%" height="180px">
                        <div class="card-img-overlay">
                            <h5 class="card-title expertisetexts">Who Are We</h5>

                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
    <div class="parallex_wrapper">
        <div class="services_gil">
            <div class="reveal container-fluid servicesoffered">
                <div class="row">
                    <div class='reveal services text-center'>
                        <div class="servicesinfo">
                            <h4>Real Estate Services</h4>
                            <p>We work with clients to help them buy, sell or rent warehouses, office buildings, residential houses and land.We also help clients in property valuation.</p>
                        </div>

                    </div>
                    <div class='reveal services'>
                        <div class="servicesinfo">
                            <h4>Property Management</h4>
                            <p>We work with property owners to ensure they engage with tenants with agreements that are protective and suitable. We ensure that the property remains profitable and attractive to the tenant. Our responsibilities include marketing, administration, tenancy facility improvement and financial reconciliation. </p>
                        </div>
                    </div>
                    <div class='reveal services'>
                        <div class="servicesinfo">
                            <h4>Construction Services</h4>
                            <p> We work with experts such as architects, civil engineers and surveyors to provide top quality works. This includes services such as construction, renovation works, design works or advice to clients on building works. We ensure compliance with local laws and regulations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="reveal text-center whywork">
            <h3>Why Work With Us?</h3>
        </div>
        <div class="our_valuesgil">

            <div class="reveal trustus">
                <div class="reveal trustusection text-center">
                    <h3>TRANSPARENCY</h3>
                    <p> We are open, honest and straight forward with all our company operations. Providing you with all information required to make an informed decision on which property is right for you.</p>
                </div>
                <div class="reveal trustusection text-center">
                    <h3>TIMELY</h3>
                    <p>We complete our clients enquiries in reasonable time ensuring that all relevant information is available so that our client can make fast and informed decisions regarding the property.</p>
                </div>
                <div class="reveal trustusection text-center">
                    <h3>TEAMWORK</h3>
                    <p>We partner with property owners,real estate professionals,financial instituitions and government institutions with an aim to complete a task in the most effective and efficient way.</p>
                </div>
            </div>
        </div>
        <div class="reveal whywork text-center d-none d-lg-block d-xl-block">
                <h3> What Our Clients Say </h3>
        </div>
        <div class="clients_feedback">
            <div class="testimonials d-none d-lg-block d-xl-block" id="clients_feedback">
                <div id="carouselExampleDark" style="height:60vh" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000" style="position: relative;">
                            <img src="/assets/staticimg/interior5.jpg" class="carouselimg d-block w-100" height="60vh"alt="feedback_background">
                            <div class="carousel-caption d-none d-md-block" style="position: absolute; top:16%; min-width:300px; background-color:rgba(255,255,255,0.8);">
                                <h5 style="font-size: 26px;">Angela</h5>
                                <p style="font-size: 21px;">“My wife & I have moved 6 times in the last 25 years. Obviously, we've dealt with many realtors both on the buying and selling side. I have to say that Kelvin is by far the BEST realtor we've ever worked with, his professionalism, personality, attention to detail, responsiveness and his ability to close the deal was Outstanding!!! If you are buying or selling a home, do yourselves a favor and hire Gertler Investment!!”</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000" style="position: relative;">
                            <img src="/assets/staticimg/interior5.jpg" class="carouselimg d-block w-100" height="60vh" alt="feedback_background">
                            <div class="carousel-caption d-none d-md-block" style="position: absolute; top:16%; min-width:300px; background-color:rgba(255,255,255,0.8);">
                                <h5 style="font-size: 26px;">Rachel</h5>
                                <p style="font-size: 21px;">“I recently sold a house with Gertler and while this can be a very stressful process, I felt 110% confident by partnering with Gertler. He was candid, provided great feedback, helped explain clearly all details and managed the actual sale negotiation brilliantly. In addition, he was extremely responsive  to every one of my questions, no matter how small. As I move forward to now BUY my next house, I am extremely certain Dave will be the right partner to help me navigate this process.”</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="position: relative;">
                            <img src="/assets/staticimg/interior5.jpg" class="carouselimg d-block w-100" height="60vh" alt="feedback_background">
                            <div class="carousel-caption d-none d-md-block" style="position: absolute; top:16%; min-width:300px; background-color:rgba(255,255,255,0.8);">
                                <h5 style="font-size: 26px;">Wafula</h5>
                                <p style="font-size: 21px;">“I was looking for an apartment that would be comfortable for me and my pets.Thank you for providing one that suites me”</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="reveal text-center whywork whyblog_sect" style="margin-bottom: 2%;">
        <h3>INSIGHTFUL BLOGS</h3>
        <div class="section_divider_home_blogs"> 
            <div class="section_divider_line_blogs"> </div>
        </div>
        <div class="btnviewall_blogs d-none d-lg-block">
            <a href="{{url('find-blogs')}}">
                <button class="viewalllistings_blogs">Find More Blogs</button>
            </a>   
        </div>
    </div>

    <div class="reveal blogs">

        @foreach($data['blogs'] as $item)
        <div class="reveal blogitems text-center">
            <a href="{{url('read-blog/'.strtolower(str_replace(' ', '-',str_replace('/','|',str_replace('?','',str_replace('.','',$item->title))))).'/'.$item->blog_id)}}" style="text-decoration: none;">
            <div class="card mb-3 blog_in" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{$item->blog_image}}" class="img-fluid rounded-start" alt="{{ucwords($item->title)}}" style="height: 200px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title" style="color: black; height:60px;overflow:hidden;font-weight:600;">{{ucwords($item->title)}}</h4>
                            <p class="card-text blog_blur" style="color: black;height:75px;overflow:hidden;">{{ucfirst($item->description)}}</p>
                            <p>Learn More...</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="card-text"><small class="text-body-secondary">Last Update: {{$item->updated_at}}</small></p>
                    </div>
                </div>
            </div>
           
            </a>
        </div>
        @endforeach

    </div>
    <div class="blog_small_button  d-sm-flex d-md-flex d-lg-none">
        <div class="btnviewall_blogs text-center">
            <a href="{{url('find-blogs')}}">
                <button class="viewalllistings_blogs_sm">Find More Blogs</button>
            </a>   
        </div>

    </div>


@endsection  

@section('scripts')
<script type="text/javascript">
 $('.filterbyproperties').on('click', function (e) {
    e.preventDefault()
    var url=$(this).attr('href')
    $.ajax({
      url: url,
      method: "GET",
      success: function (query) {
        $('#filterlocationsSection').empty();
        $('#filterlocationsSection').html(query);
      }
    })
})

</script>
<script type="text/javascript">
 $('.toplistingslink').on('click', function (e) {
    e.preventDefault()
    var url=$(this).attr('href')
    $.ajax({
      url: url,
      method: "GET",
      success: function (query) {
        $('#filterTopsection').empty();
        $('#filterTopsection').html(query);
      }
    })
})
$('.newsmodal_local').on('click', function (e) {
    e.preventDefault();
    $('.newsletter_modal').toggle();
    console.log('rerere')

});

</script>
@endsection
