@extends('layouts.admin')
@section('content')

<div class="card w-50" style="margin-bottom: 20px;">
    <div class="card-body">
        <h5 class="card-title">Add New Listing</h5>
        <a href="{{url('addlisting')}}" class="btn btn-primary">Click Here</a>
    </div>
</div>
<div class="card">
        <div class="card-header text-center">
            <h2>List of Property</h2>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center d-flex justify-content-center">
        </div>
    </div>

@endsection