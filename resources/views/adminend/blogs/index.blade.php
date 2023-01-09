@extends('layouts.admin')
@section('content')

<div class="card w-50" style="margin-bottom: 20px;">
    <div class="card-body">
        <h5 class="card-title">Add New Blog</h5>
        <a href="{{url('addblog')}}" class="btn btn-primary">Click Here</a>
    </div>
</div>
<div class="card">
    <div class=" filtersection">
        <div class="formsection">
            <div id="formbuy" style="display:inline;">
                <form method="GET" action="{{url('blogsfilter')}}">
                    @csrf
                    <div> 
                    <select name="orderby" class="form-select filterinputs" style="width: 150px;"  aria-placeholder="OrderBy">
                        <option value="newtoold" {{$data['orderby'] == 'newtoold' ? 'selected' : '' }}>Newest to Oldest</option>
                        <option value="oldtonew" {{$data['orderby'] == 'oldtonew' ? 'selected' : '' }}>Oldest to Newest</option>
                    </select>
                    <button type="submit" class="btn filtersbutton" style="float: left;">Search</button>
                </form>

            </div>
        </div>
    </div>
    <div style="background-color: whitesmoke; padding-left:2%;">
        <form action="{{url('searchblogs')}}" method="POST">
            @csrf
            <input type="text" class="form-control filterinputs" name="searchproperty"  placeholder="Search Property Name">
            <button type="submit" class="btn btn-dark" style="float: left;"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
</div>
<div class="card">
        <div class="card-header text-center">
            <h2>List of Blogs</h2>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">Blog Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Updated_at</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                @foreach($data['blogs'] as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td><img src="{{$item['blog_image']}}" height="130px" width="100px" alt='image here'></td>
                        <td>
                            <a href="{{url('editblog/'.$item->blog_id)}}">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </a>
                            <form method="GET" action="{{url('delete-blog/'.$item->blog_id)}}">
                                @csrf
                                <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                            </form>
                        <td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center d-flex justify-content-center">
            {{ $data['blogs']->links('pagination::bootstrap-4') }}
        </div>
    </div>

@endsection