<header>
    <nav class="navbar navbar-expand-lg fixed-top clientnav" style="display:none;">
    <div class="container-fluid">
        <div class=" d-block d-sm-block d-md-block d-lg-none">        
            <a class="navbar-brand" href="#">
                <img src="/assets/staticimg/gertlerinvest.png" alt="logo" height="100px"  width="135px">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText" >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left:10%;" >
            <li class="nav-item">
            <a class="nav-link navlinko" aria-current="page" href="{{ url('landing') }}">HOME</a>
            </li>
            <li class="nav-item">
            <a class="nav-link navlinko" href="{{url('houselistings')}}">OUR PROPERTIES</a>
            </li>
        </ul>
        <div class=" d-none d-lg-flex justify-content-center ">        
            <a class="navbar-brand" href="#">
                <img src="/assets/staticimg/gertlerinvest.png" alt="logo" height="100px"  width="135px">
            </a>
        </div>

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="margin-right:10%;">
            <li class="nav-item">
            <a class="nav-link navlinko" href="#">CONTACT US</a>
            </li>
            <li class="nav-item">
            <a class="nav-link navlinko" href="{{ url('aboutus') }}">ABOUT US</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</header>
