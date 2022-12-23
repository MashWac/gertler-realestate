@extends('layouts.admin')
@section('content')


<div class="card">
        <div class="card-header text-center">
            <h2> Edit Property</h2>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    @foreach($data['images'] as $things)

                        <div class=" col-md-12">

                            <form action="{{url('update-image/'.$things->propertyimage_id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class=" currentimage col-md-12">
                                    <label for="otherimages">Other Property Images</label>
                                    <input type="file" class="galleryphotonew form-control @error('otherimages') is-invalid @enderror" name="otherimages[{{$things->propertyimage_id}}]" >
                                    <span class="invalid-feedback" role="alert">
                                        @error('otherimages')
                                            <strong>{{ $message }}</strong>
                                            @enderror
                                    </span> 
                                </div>
                                <div class="currentimage col-md-6">
                                    <h4>Current Image</h4> 
                                    <img src="{{$things->image_url}}" alt="Product Image" height='400px' width='350px'>
                                </div>
                                <div class="currentimage col-md-6" >
                                    <h4>New Image</h4> 
                                    <div class="galleryofnew">
                                    
                                    </div>    

                                </div>
                                <div class="col-md-12" style="margin-top: 0.2%;">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>

                            </form>
                            <div class="col-md-6" style="margin-top:0.2%;">
                                <form method="GET" action="{{url('delete-image/'.$things->propertyimage_id)}}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger show_confirm">Delete</button>
                                </form>
                        
                            </div>
                        </div>

                    @endforeach
                </div>

            </div>
        </div>
</div>
<div class="card">
    <div class="card-header text-center">
            <h2> Add Images</h2>
        </div>
    <div class="card-body">
        <form action="{{url('add-images/'.$data['listing']->property_id)}}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="row">
                <div class="col-md-12">
                    <label for="addedimages">Added Images</label>
                    <input type="file" class="form-control @error('addedimages') is-invalid @enderror" name="addedimages[]" multiple id="gallery-photo-add">
                    <span class="invalid-feedback" role="alert">
                        @error('addedimages')
                            <strong>{{ $message }}</strong>
                            @enderror
                    </span> 
                </div>
                <div class="gallery"></div>
                <div class="col-md-12 py-3">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection