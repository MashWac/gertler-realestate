@extends('layouts.client')

@section('metatags')
<title>About Us- Find out More on {{config('app.name', 'Gertler-Investment')}} </title>
<meta name="description" content="Best realtor in Kenya. Buy, Rent and Sell property in Kenya. {{config('app.name', 'Gertler-Investment')}}">
<link rel="canonical" href="https://gertlerinvestment.com" />
<meta name="robots" content="index">

@endsection
@section('content')
<div class="mainabout">

    <div class="revealhouse imagesectionabout">
        <div class="headerpartabout">
            <h1>About Us</h1>
        </div>
    </div>

    <div class="reveal aboutgertler">
        <div class="aboutgertlerheader aboutfloat">
            <h3 class="aboutustitle"> <span class="aboutheadertitlespan">Welcome to GIL</span> </h3>
        </div>
        <div class="aboutinfo aboutfloat iframe-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/KEFgz7hx1fw?si=3nFbmTN3cTW_OXaM" 
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen></iframe>
        </div>
    </div>
    <div class="reveal aboutgertler">
        <div class="aboutgertlerheader aboutfloat">
            <h3 class="aboutustitle"> <span class="aboutheadertitlespan">About GIL</span> </h3>
        </div>
        <div class="aboutinfo aboutfloat">
            <p class="aboutustext"> We offer land and housing investment services in Kenya. Whether you are looking for an
            apartment, town house, home or commercial property, we make your dream a reality. Our
            liaising process gives you complete property analysis before you engage with the purchase
            process.</p>
        </div>
    </div>

    <div class="reveal aboutgertler d-block d-sm-block d-md-block d-lg-none">
        <div class="aboutgertlerheader aboutfloat">
            <h3 class="aboutustitle"><span class="aboutheadertitlespan">OUR VISION</span> </h3>
        </div>
        <div class="aboutinfo aboutfloat">
            <p class="aboutustext"> Our vision is to maintain reliable and trustworthy relationship with our clients.</p>
        </div>
    </div>
    <div class="reveal aboutgertler d-block d-sm-block d-md-block d-lg-none">
        <div class="aboutgertlerheader aboutfloat">
            <h3 class="aboutustitle"><span class="aboutheadertitlespan">OUR MISSION</span> </h3>
        </div>
        <div class="aboutinfo aboutfloat">
            <p class="aboutustext">Our mission is to be Kenya's most trusted and reliable property firm that fully satisfies the clients needs.</p>
        </div>
    </div>
    <div class="reveal aboutgertler d-block d-sm-block d-md-block d-lg-none">
        <div class="aboutgertlerheader aboutfloat">
            <h3 class="aboutustitle"><span class="aboutheadertitlespan">OUR OBJECTIVE</span> </h3>
        </div>
        <div class="reveal aboutinfo aboutfloat">
            <p class="aboutustext">To ensure over +1 million people invest in property</p>
        </div>
    </div>
    <div class="reveal aboutgertler">
        <div class="aboutgertlerheader aboutfloat">
            <h3 class="aboutustitle"> <span class="aboutheadertitlespan">Our Focused Team</span> </h3>
        </div>
        <div class="aboutinfo aboutfloat" style="margin-top: 50px;">
            <div style="background-color:#011B18; border-radius:60%;min-width:300px;  padding-bottom:30px; display:flex; align-items:center;justify-content:center;">
                <div style="background-color: white; color:#011B18; width:80%; border-radius:60%;min-width:250px; margin-top:-20px;" >
                    <ul style="list-style:none;" class="text-center"> 
                        <li>Administrative Managers</li>
                        <li>Relationship Managers</li>
                        <li>Business Developers</li>
                        <li>Property Valuers</li>
                        <li>Civil Engineers</li>
                        <li>Legal officers</li>
                        <li>Architects</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="reveal aboutgertler d-none d-lg-block">
        <div class="aboutgertlerheader aboutfloat">
            <h3 class="aboutustitle"> <span class="aboutheadertitlespan">What drives us</span> </h3>
        </div>
        <div class="aboutinfo aboutfloat">
            <div style="display: flex;">
                <div class="pie_chart" >
                    <p class="our_mission">Our Mission</p> 
                    <p class="our_vision">Our Vision</p> 
                    <p class="our_values">Our Objective</p> 
                </div>
                <div class="vision_text display_new_text text-center">Our vision is to maintain reliable and trustworthy relationship with our clients.</div>
                <div class="mission_text display_new_text text-center">Our mission is to be Kenya's most trusted and reliable property firm that fully satisfies the clients needs.</div>
                <div class="values_text display_new_text text-center">To ensure over +1 million people invest in property</div>

            </div>

        </div>
    </div>


    <!-- <div class="reveal aboutgertler d-block d-sm-block d-md-block d-lg-none">
        <div class="aboutgertlerheader aboutfloat">
        <h3 class="aboutustitle"><span class="aboutheadertitlespan">OUR FOUNDER</span> </h3>
        </div>
        <div class="aboutinfo aboutfloat">
            <div>
                <img src="/assets/staticimg/gertler.png" alt="gertler" width="250px" height="360px">
            </div>        
        </div>
    </div> -->
</div>
<!-- <div class="founderlarge d-none d-lg-block d-xl-block">
    <h3 class="aboutustitle"> OUR FOUNDER</h3>
    <img src="/assets/staticimg/gertler.png" alt="gertler" width="100%" height="300px">
</div> -->

@endsection  


@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('.our_mission').hover(function() {
            $('.display_new_text').removeClass('active');
            $('.mission_text').addClass('active');
        }, function() {
            $('.mission_text').removeClass('active');
        });
        $('.our_vision').hover(function() {
            $('.display_new_text').removeClass('active');
            $('.vision_text').addClass('active');
        }, function() {
            $('.vision_text').removeClass('active');
        });
        $('.our_values').hover(function() {
            $('.display_new_text').removeClass('active');
            $('.values_text').addClass('active');
        }, function() {
            $('.values_text').removeClass('active');
        });
    });
</script>
@endsection