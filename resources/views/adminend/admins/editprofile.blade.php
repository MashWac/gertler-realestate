@extends('layouts.admin')

@section('content')
    @if($data['formtype']=='add')
    <div class="card">
        <div class="card-header">
            <h4>Add user</h4>
        </div>
        <div class="card-body">
            <form action="{{url('insert-user')}}" method="POST">
                @csrf 
                <div class="row">
                    <div class="col-md-6">
                        <label for="name" >Name </label>

                        <input id="firstame" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                        <span class="invalid-feedback" role="alert">
                        @error('name')<strong>{{ $message }}</strong>@enderror
                        </span>
                            
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                        <span class="invalid-feedback" role="alert">
                        @error('email')  <strong>{{ $message }}</strong>@enderror
                        </span>
                    </div>

                    <div class="col-md-6">
                        <label for="phone" >Telephone</label>
                        <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}">
                            <span class="invalid-feedback" role="alert">
                        @error('phone')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </span>   
                    </div>

                    <div class="col-md-6">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}">
                        <span class="invalid-feedback" role="alert">
                        @error('password')  <strong>{{ $message }}</strong>@enderror
                        </span>
     
                    </div>
                    <div class="col-md-6">
                        <label for="conpass">Confirm Password:</label>
                        <input id="conpass" type="password" class="form-control @error('conpass') is-invalid @enderror" name="conpass" value="{{ old('conpass') }}" autocomplete="conpass">
                        <span class="invalid-feedback" role="alert">
                        @error('conpass')  <strong>{{ $message }}</strong>@enderror
                        </span>
     
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
    </div>
    @else
    <div class="card">
        <div class="card-header">
            <h4>Edit user</h4>
        </div>
        <div class="card-body">
            <form action="{{url('update-user/'.$data['admin']->adminid)}}" method="POST">
                @csrf 
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <label for="name" >Name </label>

                        <input id="firstame" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data['admin']->adminname }}" autocomplete="name" autofocus>
                        <span class="invalid-feedback" role="alert">
                        @error('name')<strong>{{ $message }}</strong>@enderror
                        </span>
                            
                    </div>
                    <div class="col-md-6">
                        <label for="email" >Email</label>
                        
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$data['admin']->email}}" autocomplete="email">
                        <span class="invalid-feedback" role="alert">
                        @error('email')  <strong>{{ $message }}</strong>@enderror
                        </span>
                    </div>

                    <div class="col-md-6">
                        <label for="phone" >Telephone</label>
                        <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $data['admin']->phone }}">
                            <span class="invalid-feedback" role="alert">
                        @error('phone')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </span>   
                    </div>
                    <div class="col-md-6">
                        <label for="oldpass">Old oldpass:</label>
                        <input type="oldpass" class="form-control @error('oldpass') is-invalid @enderror" name="oldpass" value="{{ old('oldpass') }}">
                        <span class="invalid-feedback" role="alert">
                        @error('oldpass')  <strong>{{ $message }}</strong>@enderror
                        </span>
     
                    </div>

                    <div class="col-md-6">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}">
                        <span class="invalid-feedback" role="alert">
                        @error('password')  <strong>{{ $message }}</strong>@enderror
                        </span>
     
                    </div>
                    <div class="col-md-6">
                        <label for="conpass">Confirm Password:</label>
                        <input id="conpass" type="password" class="form-control @error('conpass') is-invalid @enderror" name="conpass" value="{{ old('conpass') }}" autocomplete="conpass">
                        <span class="invalid-feedback" role="alert">
                        @error('conpass')  <strong>{{ $message }}</strong>@enderror
                        </span>
     
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
    </div>
    @endif
@endsection