@extends('layouts.blogs')
@section('metatags')
<title> {{$data['blog']->title}} by {{config('app.name', 'Gertler-Investment')}} </title>
<meta name="description" content=" {{$data['blog']->title}}. Learn more from blogs by {{config('app.name', 'Gertler-Investment')}}">
@endsection
@section('content')
<div class="blogbody">
    <div class="">
    <a href="{{url('find-blogs')}}" class="btnlink" style="float: right;">
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
        <a href="{{url('find-blogs')}}" class="btnlink">
        <button class="btn btn-dark btnlinkfloat">Read More</button>
        </a>
    </div>

</div>
@endsection  


