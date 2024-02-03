<div class="card text-center propertieshome">

    <div class="container">
        <div class=" justify-content-center">
        @foreach($data['more_listings'] as $item)
        <div class="card propertyhome item" style="width: 18rem; margin: 2%; float:left; height:600px">
            <div class="image-container">
                <a href="{{url('view-property/'.strtolower(str_replace(' ', '-',$item->house_type)).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->location))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->neighborhood))).'/'.strtolower(str_replace(' ', '-',str_replace('/','|',$item->property_name))).'/'.$item->property_id)}}">
                    <img src="{{$item->mainphoto}}" class="card-img-top property_card_img img_property " alt="property image" height="230px" >
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
</div>