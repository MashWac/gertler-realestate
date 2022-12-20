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
        <div class=" houselist">
            <div class="houseimage">
                <img src="/assets/staticimg/house1.jpg" class="houseimages" alt="...">
            </div>
            <div class="housedetails">
                <div class="projectname housedetailsect">
                    <h3 class="housetitles"> Project Name</h3>
                    <p>2 Bedroom Runda</p>
                </div>
                <div class="housetype housedetailsect">
                    <h3 class="housetitles"> Type</h3>
                    <p>Bungalow</p>
                </div>
                <div class="houseaddress housedetailsect">
                    <h3 class="housetitles"> Address</h3>
                    <p>3rd Avenue Close</p>
                </div>
                <div class="housedetailsect">
                    <div class="housepace">
                        <h3 class="housetitles"> Rooms</h3>
                        <p> 3</p>
                    </div>
                    <div class="housepace">
                        <h3 class="housetitles"> Bathrooms</h3>
                        <p>2.5</p>
                    </div>
                    <div class="housepace">
                        <h3 class="housetitles"> SqFt</h3>
                        <p>6000ft</p>
                    </div>
                </div>
                <div class="Price housedetailsect">
                    <h3 class="housetitles"> Price</h3>
                    <p>KSH 8,000,000</p>
                    <a href="houseview">
                        <button class="btn btn-dark buttongoproduct">BUY</button>
                    </a>
                </div>
                <div>
                    
                </div>
            </div>
        </div>
        <div class=" houselist">
            <div class="houseimage">
                <img src="/assets/staticimg/house2.jpg" class="houseimages" alt="...">
            </div>
            <div class="housedetails">
                <div class="projectname housedetailsect">
                    <h3 class="housetitles"> Project Name</h3>
                    <p>2 Bedroom Runda</p>
                </div>
                <div class="housetype housedetailsect">
                    <h3 class="housetitles"> Type</h3>
                    <p>Bungalow</p>
                </div>
                <div class="houseaddress housedetailsect">
                    <h3 class="housetitles"> Address</h3>
                    <p>3rd Avenue Close</p>
                </div>
                <div class="housedetailsect">
                    <div class="housepace">
                        <h3 class="housetitles"> Rooms</h3>
                        <p> 3</p>
                    </div>
                    <div class="housepace">
                        <h3 class="housetitles"> Bathrooms</h3>
                        <p>2.5</p>
                    </div>
                    <div class="housepace">
                        <h3 class="housetitles"> SqFt</h3>
                        <p>6000ft</p>
                    </div>
                </div>
                <div class="Price housedetailsect">
                    <h3 class="housetitles"> Price</h3>
                    <p>KSH 8,000,000</p>
                    <a href="{{url('houseview')}}">
                        <button class="btn btn-dark buttongoproduct">RENT</button>
                    </a>  
                </div>
            </div>
        </div>
        <div class=" houselist">
            <div class="houseimage">
                <img src="/assets/staticimg/house3.jpg" class="houseimages" alt="...">
            </div>
            <div class="housedetails">
                <div class="projectname housedetailsect">
                    <h3 class="housetitles"> Project Name</h3>
                    <p>2 Bedroom Runda</p>
                </div>
                <div class="housetype housedetailsect">
                    <h3 class="housetitles"> Type</h3>
                    <p>Bungalow</p>
                </div>
                <div class="houseaddress housedetailsect">
                    <h3 class="housetitles"> Address</h3>
                    <p>3rd Avenue Close</p>
                </div>
                <div class="housedetailsect">
                    <div class="housepace">
                        <h3 class="housetitles"> Rooms</h3>
                        <p> 3</p>
                    </div>
                    <div class="housepace">
                        <h3 class="housetitles"> Bathrooms</h3>
                        <p>2.5</p>
                    </div>
                    <div class="housepace">
                        <h3 class="housetitles"> SqFt</h3>
                        <p>6000ft</p>
                    </div>
                </div>
                <div class="Price housedetailsect">
                    <h3 class="housetitles"> Price</h3>
                    <p>KSH 8,000,000</p>   
                </div>
            </div>
        </div>
        <div class=" houselist">
            <div class="houseimage">
                <img src="/assets/staticimg/house5.jpg" class="houseimages" alt="...">
            </div>
            <div class="housedetails">
                <div class="projectname housedetailsect">
                    <h3 class="housetitles"> Project Name</h3>
                    <p>2 Bedroom Runda</p>
                </div>
                <div class="housetype housedetailsect">
                    <h3 class="housetitles"> Type</h3>
                    <p>Bungalow</p>
                </div>
                <div class="houseaddress housedetailsect">
                    <h3 class="housetitles"> Address</h3>
                    <p>3rd Avenue Close</p>
                </div>
                <div class="housedetailsect">
                    <div class="housepace">
                        <h3 class="housetitles"> Rooms</h3>
                        <p> 3</p>
                    </div>
                    <div class="housepace">
                        <h3 class="housetitles"> Bathrooms</h3>
                        <p>2.5</p>
                    </div>
                    <div class="housepace">
                        <h3 class="housetitles"> SqFt</h3>
                        <p>6000ft</p>
                    </div>
                </div>
                <div class="Price housedetailsect">
                    <h3 class="housetitles"> Price</h3>
                    <p>KSH 8,000,000</p>   
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection  
