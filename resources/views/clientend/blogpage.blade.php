@extends('layouts.blogs')
@section('content')
<div class="blogbody">
    <div class="">
    <a href="{{url('blogpage')}}" class="btnlink" style="float: right;">
    <button class="btn btn-dark btnlinkfloat">Back</button>
    </a>
        <h1 class="blogheader">
            {{$data['blog']->title}}
        </h1>
    </div>
    <div class="blogimage">
        <img src="{{$data['blog']->blog_image}}" alt="" width="100%" height="500px">
    </div>
    <div class="blogtext">
        {!!$data['blog']->information!!}
        <a href="{{url('blogpage')}}" class="btnlink">
        <button class="btn btn-dark btnlinkfloat">Read More</button>
        </a>
    </div>

</div>
@endsection  


