@extends('layouts.blogs')
@section('metatags')
<title> {{$data['blog']->title}} by {{config('app.name', 'Gertler Investment Limited')}} </title>
<meta name="description" content=" {{$data['blog']->description}}. Learn more from blogs by {{config('app.name', 'Gertler Investment Limited')}}">
@endsection
@section('content')
<div class="blogbody">
    <!-- <div class="">
        <a href="{{url('find-blogs')}}" class="btnlink" style="float: right;">
        <button class="btn btn-dark btnlinkfloat">More Blogs</button>
        </a>
    </div> -->
    <div class="blogimage">
        <img src="{{$data['blog']->blog_image}}" alt="" width="100%" height="500px">
        <div class="blogheading_back">
            <h1 class="blogheader">
                {{$data['blog']->title}}
            </h1>
        </div>
    </div>
    <div>
        <h4 style="text-indent: 50px; font-size:18px;color: rgb(105, 105, 105);">Author: Admin, Gertler Investment Limited</h4>
        <p>{{$data['blog']->updated_at}}</p>
    </div>


    <div class="blogtext">
        {!!$data['blog']->information!!}
        <a href="{{url('find-blogs')}}" class="btnlink">
        <button class="btn btn-dark btnlinkfloat">Read More</button>
        </a>
    </div>

</div>
@endsection  


