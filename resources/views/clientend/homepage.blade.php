@extends('layouts.client')
@section('content')
    <video width="100%" class="d-none d-md-block" autoplay muted loop id="myVideo">
        <source src="/assets/staticimg/final7.mp4" type="video/mp4">
    </video>
    <video width="100%" class="d-block d-sm-block d-md-none" autoplay muted loop id="myVideo">
        <source src="/assets/staticimg/final10.mp4" type="video/mp4">
    </video>
    <!-- <img src="/assets/staticimg/final7.gif" class="" id="myVideo"width="100%" > -->
    <div class="landingback">
    
        <div class="landingtext d-none d-lg-block d-xl-block">
            <p class='landertext'>YOUR NEXT INVESTMENT IS RIGHT HERE</p>
        </div>
        <div class="landingoptions d-none d-lg-block d-xl-block">
            <a href="{{url('houselistings/buy')}}"><div><button class="homelandoptions">BUY</button></div></a>
            <a href="{{url('houselistings/rent')}}"><div><button class="homelandoptions">RENT</button></div></a>
            <a href="{{url('rentout')}}"><div><button class="homelandoptions">SELL</button></div></a>
        </div>
    </div>
    <div class="localexpertise container-fluid justify-center">
        <div class="reveal localexpertisetext ms-auto">
            <h3 class="localexpertisetextheader">LOCAL EXPERTISE - GLOBAL CONNECTIONS</h3>
        </div>
        <div class="expertisesection">
        <a href="{{ url('aboutus') }}">
            <div class="localexpertiseimage">
                <div class="card text-bg-dark" style="width:18rem;">
                    <img src="/assets/staticimg/infinitypool1.jpg" class=" imgexpertisee card-img" alt="..." width="200px" height="200px">
                    <div class="card-img-overlay">
                        <h5 class="card-title expertisetexts">WHO ARE WE</h5>

                    </div>
                </div>

            </div>
        </a>
            <a href="{{url('houselistings/none')}}">
            <div class="localexpertiseimage">
            
                <div class="card text-bg-dark" style="width:18rem;">
                    <img src="/assets/staticimg/dining2.jpg" class="imgexpertisee card-img" alt="..." width="200px" height="200px">
                    <div class="card-img-overlay">
                        <h5 class="card-title expertisetexts">PROPERTIES</h5>
                    </div>
                </div>
            </a>
            </div>
            <a href="={{url('blogs')}}">
            <div class="localexpertiseimage">
                <div class="card text-bg-dark" style="width:18rem;">
                    <img src="/assets/staticimg/hillhouse.jpg" class="imgexpertisee card-img" alt="..." width="200px" height="200px">
                    <div class="card-img-overlay">
                        <h5 class="card-title expertisetexts">OUR BLOGS</h5>
                    </div>
                </div>
            </div>
            </a>
        </div>

    </div>
    <div class="reveal ourprops text-center whywork">
        <h3>Our Properties</h3>
    </div>
    <div class="reveal forsale">
        <div id="filterbar" class="filterbar"class="text-center">
            <ul id="filters">
                <li class="filteropts {{ \Illuminate\Support\Facades\Request::is('/') ? 'active' : ''}}"><a href="{{url('/')}}" >All</a></li>
                @foreach($data['locations'] as $things)
                    <li class="filteropts {{ \Illuminate\Support\Facades\Request::is('filterbylocation/'.$things->location_id) ? 'active' : ''}}"><a href="{{url('filterbylocation/'.$things->location_id)}}" >{{$things->name}}</a></li>
                @endforeach
            </ul>     
        </div>
        <div class="card text-center propertieshome">
            @if($data['count']>5)
            <div class="owl-carousel owl-theme">
            @foreach($data['listings'] as $item)
            <div class="card propertyhome item" style="width: 18rem; margin: 2%; float:left; height:670px">
                        <img src="{{$item->mainphoto}}" class="card-img-top" alt="image property" height="280px" width="">
                        <p class="housetypetag"> {{$item->listing_type}}</p>
                        <div class="card-body">
                            <h5 class="card-title housetitleprop">{{$item->property_name}}</h5>
                            <h6>{{$item->neighborhood}} {{$item->location}}, KENYA.</h6> 
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
                            <div class="buttoncardsection" style="position: absolute; bottom:4%; left:38%;">
                                <a href="{{url('houseview/'.$item->property_id)}}">
                                    @if($item->listing_type=='buy')
                                    <button class="btn btn-dark buttongoproduct" style="border-radius: 0.4rem;">BUY</button>   
                                    @elseif($item->listing_type=='rent')
                                    <button class="btn btn-dark buttongoproduct" style="border-radius: 0.4rem;">RENT</button>
                                    @else
                                    <button class="btn btn-dark buttongoproduct" style="border-radius: 0.4rem;">BUY/RENT</button>
                                    @endif  
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
                    <div class="card propertyhome item" style="width: 18rem; margin: 2%; float:left; height:670px">
                        <img src="{{$item->mainphoto}}" class="card-img-top" alt="image property" height="280px" width="">
                        <p class="housetypetag"> {{$item->listing_type}}</p>
                        <div class="card-body">
                            <h5 class="card-title housetitleprop">{{$item->property_name}}</h5>
                            <h6>{{$item->neighborhood}} {{$item->location}}, KENYA.</h6> 
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
                            <div class="buttoncardsection" style="position: absolute; bottom:4%; left:38%;">
                                <a href="{{url('houseview/'.$item->property_id)}}">
                                    @if($item->listing_type=='buy')
                                    <button class="btn btn-dark buttongoproduct" style="border-radius: 0.4rem;">BUY</button>   
                                    @elseif($item->listing_type=='rent')
                                    <button class="btn btn-dark buttongoproduct" style="border-radius: 0.4rem;">RENT</button>
                                    @else
                                    <button class="btn btn-dark buttongoproduct" style="border-radius: 0.4rem;">BUY/RENT</button>
                                    @endif  
                                </a>
                            </div>
                             
                        </div>
                    </div>
                @endforeach
                    
                </div>

            </div>
            @endif

            <div class="btnviewall">
                <a href="{{url('houselistings/none')}}">
                    <button class="viewalllistings">VIEW ALL LISTINGS</button>
                </a>
                
            </div>
        </div>
    </div>
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
    <div class="reveal text-center whywork">
        <h3>Why Work With Us?</h3>
    </div>
    <div class="reveal trustus">
        <div class="reveal trustusection text-center">
            <h3>TRANSPARENCY</h3>
            <p> We are open, honest and straight forward with all our company operations. Provinding you with all information required to make an informed decision on which property is right for you.</p>
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
    <div class="reveal whywork text-center d-none d-lg-block d-xl-block">
        <h3> What Our Clients Say </h3>
    </div>
    <div class="testimonials d-none d-lg-block d-xl-block">
        <div id="carouselExampleDark" style="height:80vh" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000" style="position: relative;">
                    <img src="/assets/staticimg/option4.jpg" class="carouselimg d-block w-100" height="80vh"alt="...">
                    <div class="carousel-caption d-none d-md-block" style="position: absolute; top:16%; min-width:300px;">
                        <h5 style="font-size: 26px;">Angela</h5>
                        <p style="font-size: 21px;">“My wife & I have moved 6 times in the last 25 years. Obviously, we've dealt with many realtors both on the buying and selling side. I have to say that Kelvin is by far the BEST realtor we've ever worked with, his professionalism, personality, attention to detail, responsiveness and his ability to close the deal was Outstanding!!! If you are buying or selling a home, do yourselves a favor and hire Gertler Investment!!”</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000" style="position: relative;">
                    <img src="/assets/staticimg/option4.jpg" class="carouselimg d-block w-100" height="80vh" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="position: absolute; top:16%; min-width:300px;">
                        <h5 style="font-size: 26px;">Rachel</h5>
                        <p style="font-size: 21px;">“I recently sold a house with Gertler and while this can be a very stressful process, I felt 110% confident by partnering with Gertler. He was candid, provided great feedback, helped explain clearly all details and managed the actual sale negotiation brilliantly. In addition, he was extremely responsive  to every one of my questions, no matter how small. As I move forward to now BUY my next house, I am extremely certain Dave will be the right partner to help me navigate this process.”</p>
                    </div>
                </div>
                <div class="carousel-item" style="position: relative;">
                    <img src="/assets/staticimg/option4.jpg" class="carouselimg d-block w-100" height="80vh" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="position: absolute; top:16%;  min-width:300px;">
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
@endsection  


