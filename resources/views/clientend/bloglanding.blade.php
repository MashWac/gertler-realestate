@extends('layouts.client')
@section('metatags')
<title>Blogs on Property in Kenya by {{config('app.name', 'Gertler-Investment')}} </title>
<meta name="description" content="Best realtor in Kenya. Buy, Rent and Sell property in Kenya. Learn more from blogs by {{config('app.name', 'Gertler-Investment')}}">
<link rel="canonical" href="https://gertlerinvestment.com" />
<meta name="robots" content="index">
@endsection
@section('content')
<div class="  blogbackground ">
    <div class="">
        <div class="">
            <div class="">
                <img src="/assets/staticimg/infinitypool1.jpg" class="  card-img" alt="..." width="100%" height="600px">
            </div>
            <div class="blogheading d-none d-lg-block">
                <h2>
                    Find interesting and insightful information on the Kenyan real estate market here.
                </h2>
                <div class="formsearchblog " style="margin-top:7%;">
                    <form action="{{url('searchblog')}}" method="POST">
                        @csrf
                        <div class="col-md-6">
                        <input type="text" class="form-control blogsearchinput" style="float:left; height:50px" name="searchproperty" placeholder="Search Interest">
                        </div>
                        <button type="submit" class="btn btn-dark blogsearchbutton" style="float:left; height:50px;margin-left: -50px;"><ion-icon name="search-circle-outline" size="large"></ion-icon></button>
                    </form>
                </div>
                
            </div>

            <div class="blogheadingsm d-block d-sm-block d-lg-none">
                <h2>
                    Find interesting and insightful information on the Kenyan real estate market here.
                </h2>
                <div class="formsearchblog" style="margin-top:10%;">
                    <form>
                        <div class="col-md-6">
                        <input type="text" class="form-control blogsearchinput" style="float:left; height:50px; width:250px;" placeholder="Search Interest">
                        </div>
                        <button type="submit" class="btn btn-dark blogsearchbutton" style="float:left; height:50px;margin-left: -50px;"><ion-icon name="search-circle-outline" size="large"></ion-icon></button>
                    </form>
                </div>
                
            </div>
        </div>

        <div class="container-fluid justify-content-center bloglist" style="margin-top: 40px;">
            <div class="row ">
                <div class="">
                    @if($data['count']>0)
                    @foreach($data['blogs'] as $item)
                    <div class="card mb-3" style="max-width:88%; margin-left:6%; margin-bottom:50px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="{{$item->blog_image}}" class="img-fluid rounded-start" alt="" height="100%" width="250px" >
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->title}} </h5>
                                <p class="card-text">{{$item->description}}</p>
                                <a href="{{url('read-blog/'.strtolower(str_replace(' ', '-',$item->description)).'/'.$item->blog_id)}}" class="btn btn-dark">View Blog</a>
                                <p class="card-text"><small class="text-muted">Updated at {{$item->updated_at}}</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="emptyquery container-fluid" style="width: 100%;">
                        <div class="row" style="width: 95%;">
                            <div class="text-center">
                            <h2 class="emptyqueryheader">
                                SORRY NO BLOGS FOUND
                            </h2>
                            <p >There are no blogs with the specifications you have search for. You can change your specifications or <a href="#footercon">Contact Us</a> for assistance.</p>
                            </div>
                            <ion-icon name="sad-outline" style="font-size: 100px;"></ion-icon>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="text-center d-flex justify-content-center">
                    {{ $data['blogs']->appends(Request::all())->links('pagination::bootstrap-5')}}
                </div>

            </div>

        </div>
   

    </div>
</div>
@endsection  


