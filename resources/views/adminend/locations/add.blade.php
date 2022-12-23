@extends('layouts.admin')

@section('content')
    @if($data['formtype']=='add')
    <div class="card">
        <div class="card-header">
            <h4>Add Location</h4>
        </div>
        <div class="card-body">
            <form action="{{url('insert-location')}}" method="POST">
                @csrf 
                <div class="row">
                    <div class="col-md-6">
                        <label for="locationname">Location Name</label>
                        <input id="locationname" type="text" class="form-control @error('locationname') is-invalid @enderror" name="locationname" value="{{ old('locationname') }}" autocomplete="locationname" autofocus>
                        <span class="invalid-feedback" role="alert">
                        @error('locationname')<strong>{{ $message }}</strong>@enderror
                        </span>
                    </div>
                    <div class="col-md-6">
                        <label for="countylocate">County</label>
                        <input type="text" class="form-control @error('countylocate') is-invalid @enderror" name="countylocate" list="countyselect" value="{{ old('countylocate')}}">
                            <datalist id="countyselect">
                                @foreach($data['counties'] as $item)
                                <option value="<?=$item['name']?>"><?="county-".$item['name']?><option>
                                @endforeach
                            </datalist>
                            <span class="invalid-feedback" role="alert">
                                @error('countylocate')
                                    <strong>{{ $message }}</strong>
                                    @enderror
                            </span>   
                    </div>
                    <div class="col-md-12 py-3">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
            @else
            <div class="card">
                <div class="card-header">
                    <h4>Edit Location</h4>
                </div>
                <div class="card-body">
                    <form action="{{url('update-location/'.$data['location']->location_id)}}" method="POST">
                        @csrf 
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <label for="locationname">Location Name</label>
                                <input id="locationname" type="text" class="form-control @error('locationname') is-invalid @enderror" name="locationname" value="{{ $data['location']->name }}" autocomplete="locationname" autofocus>
                                <span class="invalid-feedback" role="alert">
                                @error('locationname')<strong>{{ $message }}</strong>@enderror
                                </span>
                            </div>
                            <div class="col-md-6">
                                <label for="countylocate">County</label>
                                @foreach($data['counties'] as $item)
                                    @if($item['name']== $data['location']->county)
                                    <input type="text" class="form-control @error('countylocate') is-invalid @enderror" name="countylocate" list="countyselect" value="{{$item->name}}">
                                    @endif
                                @endforeach
                                    <datalist id="countyselect">
                                        @foreach($data['counties'] as $item)
                                        <option value="<?=$item['name']?>"><?="county-".$item['name']?><option>
                                        @endforeach
                                    </datalist>
                                    <span class="invalid-feedback" role="alert">
                                        @error('countylocate')
                                            <strong>{{ $message }}</strong>
                                            @enderror
                                    </span>   
                            </div>
                            <div class="col-md-12 py-3">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            @endif
@endsection