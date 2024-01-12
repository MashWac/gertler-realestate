<header>
    <nav class="navbar navbar-expand-lg fixed-top clientnav">
    <div class="container-fluid">
        <div class=" d-block">        
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/assets/staticimg/gertlerinvest.png" alt="logo" class="gertler-logo">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" ></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText" >

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="margin-right:10%;">
            <li class="nav-item">
            <a class="nav-link navlinko" aria-current="page" href="{{ url('/') }}">HOME</a>
            </li>
            <li class="nav-item">
            <a class="nav-link navlinko" href="{{url('properties-in-kenya/none')}}">OUR PROPERTIES</a>
            </li>
            <li class="nav-item">
            <a class="nav-link navlinko" href="#footercon">CONTACT US</a>
            </li>
            <li class="nav-item">
            <a class="nav-link navlinko" href="{{ url('aboutus') }}">ABOUT US</a>
            </li>
            <li class="nav-item d-block d-sm-block d-md-block d-lg-none">
            <a class="nav-link navlinko" href="{{url('properties-in-kenya/buy')}}">BUY</a>
            </li>
            <li class="nav-item d-block d-sm-block d-md-block d-lg-none">
            <a class="nav-link navlinko" href="{{url('properties-in-kenya/rent')}}">RENT</a>
            </li>
            <li class="nav-item d-block d-sm-block d-md-block d-lg-none">
            <a class="nav-link navlinko" href="{{url('properties-in-kenya/sall')}}">BUY/RENT</a>
            </li>
            <li class="nav-item d-block d-sm-block d-md-block d-lg-none">
            <a class="nav-link navlinko" href="{{url('rentout')}}">SELL</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</header>
