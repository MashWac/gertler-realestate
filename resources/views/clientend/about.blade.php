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
            <h3 class="aboutustitle">About GIL</h3>
        </div>
        <div class="aboutinfo aboutfloat">
            <p class="aboutustext"> Gertler Investment Limited is a real estate, construction and management company based in Kenya. We provide property brokerage, asset valuation report and construction services. We are committed to our vision, mission and values to ensure client satisfaction. We strive to be dependable and consistent in all of our dealings.
                <br>Our professional, friendly and experienced team is made up of experts in wide range of property and construction field. From our civil engineers to our experience property agents, we can provide a complete property liaising, development and management service.</p>
        </div>
    </div>

    <div class="reveal aboutgertler">
        <div class="aboutgertlerheader aboutfloat">
            <h3 class="aboutustitle"> OUR VISION</h3>
        </div>
        <div class="aboutinfo aboutfloat">
            <p class="aboutustext"> Our vision is to maintain reliable and trustworthy relationship with our clients.</p>
        </div>
    </div>
    <div class="reveal aboutgertler">
        <div class="aboutgertlerheader aboutfloat">
            <h3 class="aboutustitle">OUR MISSION</h3>
        </div>
        <div class="aboutinfo aboutfloat">
            <p class="aboutustext">Our mission is to be Kenya's most trusted and reliable property firm that fully satisfies the clients needs.</p>
        </div>
    </div>
    <div class="reveal aboutgertler">
        <div class="aboutgertlerheader aboutfloat">
            <h3 class="aboutustitle">OUR OBJECTIVE</h3>
        </div>
        <div class="reveal aboutinfo aboutfloat">
            <p class="aboutustext">To ensure over +1 million people invest in property</p>
        </div>
    </div>
    <div class="reveal aboutgertler d-block d-sm-block d-md-block d-lg-none">
        <div class="aboutgertlerheader aboutfloat">
            <h3 class="aboutustitle"> OUR FOUNDER</h3>
        </div>
        <div class="aboutinfo aboutfloat">
            <div>
                <img src="/assets/staticimg/gertler.png" alt="gertler" width="250px" height="360px">
            </div>        
        </div>
    </div>
</div>
<div class="founderlarge d-none d-lg-block d-xl-block">
    <h3 class="aboutustitle"> OUR FOUNDER</h3>
    <img src="/assets/staticimg/gertler.png" alt="gertler" width="100%" height="300px">
</div>

@endsection  


