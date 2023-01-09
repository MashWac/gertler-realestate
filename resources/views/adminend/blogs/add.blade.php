@extends('layouts.admin')
@section('content')
@if($data['formtype']=='add')
<div class="card">
        <div class="card-header text-center">
            <h2> Add New Blog</h2>
        </div>
        <div class="card-body">
        <form method="POST" action="{{url('insert-blog')}}" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">
                            <label for="blogtitle">Title Name</label> 
                            <input id="blogtitle" type="text" class="form-control @error('blogtitle') is-invalid @enderror"  name="blogtitle" value="{{old('blogtitle')}}" autocomplete="blogtitle" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('blogtitle')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-12 ">
                            <label for="blogdescription">Blog Description</label> 
                            <input id="blogdescription" type="text" class="form-control @error('blogdescription') is-invalid @enderror"  name="blogdescription" value="{{old('blogdescription')}}" autocomplete="blogdescription" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('blogdescription')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-12 ">
                            <label for="bloginformation">BlogInformation</label> 
                            <textarea class="form-control @error('bloginformation') is-invalid @enderror" name="bloginformation" id="propertydescription" autocomplete="bloginformation" autofocus> {!!old('bloginformation')!!}</textarea>
                            <span class="invalid-feedback" role="alert">
                            @error('bloginformation')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-12">
                                <label for="mainimage">Main Blog Image</label>
                                <input type="file" class="form-control @error('mainimage') is-invalid @enderror" id="img"  value="{{ old('mainimage')}}"name="mainimage">
                                <span class="invalid-feedback" role="alert">
                                @error('mainimage')
                                    <strong>{{ $message }}</strong>
                                    @enderror
                                </span>  
                        </div>
                        <div class="col-md-6" id="selectedBanner">

                        </div>
                        <div class="col-md-12" style="margin-top: 6%;">
                            <button type="submit" class="btn btn-dark buttongoproduct">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="text-center d-flex justify-content-center">
        </div>
</div>
@else
<div class="card">
        <div class="card-header text-center">
            <h2> Edit Blog</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('update-blog/'.$data['blog']->blog_id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">
                            <label for="blogtitle">Title Name</label> 
                            <input id="blogtitle" type="text" class="form-control @error('blogtitle') is-invalid @enderror"  name="blogtitle" value="{{$data['blog']->title}}" autocomplete="blogtitle" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('blogtitle')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-12 ">
                            <label for="blogdescription">Blog Description</label> 
                            <input id="blogdescription" type="text" class="form-control @error('blogdescription') is-invalid @enderror"  name="blogdescription" value="{{$data['blog']->description}}" autocomplete="blogdescription" autofocus>
                            <span class="invalid-feedback" role="alert">
                            @error('blogdescription')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-12 ">
                            <label for="bloginformation">BlogInformation</label> 
                            <textarea class="form-control @error('bloginformation') is-invalid @enderror" name="bloginformation" id="propertydescription"autocomplete="bloginformation" autofocus>{{$data['blog']->information}}</textarea>
                            <span class="invalid-feedback" role="alert">
                            @error('bloginformation')<strong>{{ $message }}</strong>@enderror
                            </span>
                        </div>
                        <div class="col-md-12">
                                <label for="mainimage">Main Blog Image</label>
                                <input type="file" class="form-control @error('mainimage') is-invalid @enderror" id="img" value="{{old('mainimage')}}"  name="mainimage">
                                <span class="invalid-feedback" role="alert">
                                @error('mainimage')
                                    <strong>{{ $message }}</strong>
                                    @enderror
                                </span>  
                        </div>
                        <div class="col-md-6">
                            <h4>Current Image</h4> 
                            @if($data['blog']->blog_image)
                            <img src="{{$data['blog']->blog_image}}" alt="Product Image" height='400px' width='350px'>
                            @endif
                        </div>
                        <div class="col-md-6" >
                            <h4>New Image</h4> 
                            <div id="selectedBanner">
                            
                            </div>

                        </div>
                        <div class="col-md-12" style="margin-top: 6%;">
                            <button type="submit" class="btn btn-dark buttongoproduct">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="text-center d-flex justify-content-center">
        </div>
</div>
@endif

@endsection