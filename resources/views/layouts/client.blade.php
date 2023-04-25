<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ url('/assets/staticimg/gertlerinvest.png') }}">
        <link rel="canonical" href="https://gertlerinvestment.com" />
        <meta name="sailthru.tags" content="property-for-sale" />
        <meta property="og:type" content="website">
        <meta property="og:title" content="Property for Sale and Rent in Kenya- {{config('app.name', 'Gertler-Investment')}}">
        <meta property="og:description" content="Reliable and Trustworthy agents.">
        <meta property="og:site_name" content="Gertler-Investment">
        <meta property="og:url" content="https://gertlerinvestment.com/">
        <meta property="og:locale" content="en_US">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="{{config('app.name', 'Gertler-Investment')}} ">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Gertler Investment",
            "alternateName": "gertlerinvestment.com",
            "url": "https://gertlerinvestment.com",
            "logo": "{{ url('/assets/staticimg/gertlerinvest.png') }}",
            "contactPoint": {    
            "@type": "ContactPoint",
                "telephone": "(+254)712054154",
                "email": "gertlerinvestmentltd@gmail.com",
                "contactType": "customer service",
            "sameAs": [
            "https://twitter.com/componentscse",
            "https://www.youtube.com/channel/UC833cWMpbwukIyEBQE9pZWg",
            "https://www.facebook.com/people/gertler_investment_ltd/100085293200835/",
            "https://wa.me/254712054154",
            "https://instagram.com/gertler_investment_ltd?igshid=ZDdkNTZiNTM="
            ]
            }
        }

        </script>
        @yield('metatags')
        <script src="https://kit.fontawesome.com/9afd237793.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Flamenco:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=Bree+Serif&family=Courgette&family=Kanit:ital,wght@1,500;1,800&family=Kaushan+Script&family=Lobster&family=Lora:ital,wght@1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Acme&family=Goldman&family=Kanit:ital,wght@1,500&family=Lobster&family=Merriweather:ital,wght@0,700;1,900&family=Patua+One&family=Prompt:wght@500&family=Righteous&family=Roboto+Slab:wght@800&family=Russo+One&family=Secular+One&family=Varela+Round&family=Vollkorn:ital,wght@0,400;0,700;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oxygen&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Lora:wght@500&family=Oswald&family=Roboto+Condensed&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Open+Sans:ital@0;1&family=Poppins:wght@300;400&family=Raleway:ital,wght@0,400;1,300&family=Red+Hat+Mono&family=Roboto+Condensed&family=Roboto:ital,wght@0,400;1,300&family=Source+Sans+Pro:ital,wght@0,400;1,300&family=Ubuntu:ital@0;1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Federo&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fjord+One&display=swap" rel="stylesheet">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js" integrity="sha512-vNrhFyg0jANLJzCuvgtlfTuPR21gf5Uq1uuSs/EcBfVOz6oAHmjqfyPoB5rc9iWGSnVE41iuQU4jmpXMyhBrsw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Styles --> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
        <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet"> 
        <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet"> 
        <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet"> 


    </head>
    
    <body class="antialiased">
        @include('layouts.inc.clientnav')
        @include('layouts.inc.clientnavhid')
        <div class="mainbody">
            @yield('content')
            <a class="floatinglink" href="https://wa.me/254712054154">
            <div class="floatingicon" style="position: fixed; bottom:5%; right:2%;">
                    <ion-icon class="floaticon" name="logo-whatsapp"></ion-icon>
            </div>
            </a>
        </div>


        @include('layouts.inc.clientfooter')
            <!--- Scripts-->
            <script src="{{ asset('frontend/js/imgpopup.js') }}" defer></script>

    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}" defer></script>
    <!-- <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script> -->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/carousel.js') }}" defer></script>

    <script src="{{ asset('frontend/js/paycalc.js') }}" defer></script>
    <script src="{{ asset('frontend/js/downloadpdf.js') }}" defer></script>
    <script src="{{ asset('frontend/js/formdisplay.js') }}" defer></script>
    <script src="{{ asset('frontend/js/navbarchange.js') }}" defer></script>
    <script src="{{ asset('frontend/js/changehomedivstatus.js') }}" defer></script>
    <script src="{{ asset('frontend/js/houselistload.js') }}" defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    
    @if(session('status'))
    <script>
        swal("{{session('status')}}")
    </script>
    @endif


    </body>
    
</html>
