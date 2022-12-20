@extends('layouts.client')
@section('content')
    <video width="100%" autoplay muted loop id="myVideo">
        <source src='/assets/staticimg/final3.mp4' type='video/mp4'>
    </video>
    <div class="landingback">
    
        <div class="landingtext d-none d-lg-block d-xl-block">
            <p class='landertext'>YOUR NEXT INVESTMENT IS RIGHT HERE</p>
        </div>
        <div class="landingoptions d-none d-lg-block d-xl-block">
            <a href="{{url('houselistings')}}"><div><button class="homelandoptions">BUY</button></div></a>
            <a href="{{url('houselistings')}}"><div><button class="homelandoptions">RENT</button></div></a>
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
            <a href="{{url('houselistings')}}">
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
    <div class="reveal forsale">

    </div>

    <div class="reveal forent">

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
    <div class="reveal whywork text-center">
        <h3> What Our Clients Say </h3>
    </div>
    <div class="testimonials">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="/assets/staticimg/option4.jpg" class="carouselimg d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="/assets/staticimg/option4.jpg" class="carouselimg d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/assets/staticimg/option4.jpg" class="carouselimg d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
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


