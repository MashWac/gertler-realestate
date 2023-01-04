@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
            <div class="card" style="width: 16rem; margin:3%;">
                <div class="card-body text-center">
                    <h5 class="card-title">Rent Requests</h5>
                    <h6 class="card-subtitle mb-2 text-muted">You Have Rent Requests That Need Servicing</h6>
                    <h3>{{$data['rentrequests']}}</h3>
                    <a href="{{url('rentalrequests')}}" class="card-link">View Requests</a>
                </div>
            </div>
            <div class="card" style="width: 16rem; margin:3%;">
                <div class="card-body text-center">
                    <h5 class="card-title">Purchase Requests</h5>
                    <h6 class="card-subtitle mb-2 text-muted">You Have Purchase Requests That Need Servicing</h6>
                    <h3>{{$data['purchaserequests']}}</h3>
                    <a href="{{url('purchaserequests')}}" class="card-link">View Requests</a>

                </div>
            </div>
            <div class="card" style="width: 16rem; margin:3%;">
                <div class="card-body text-center">
                    <h5 class="card-title">Purchase/Rental Requests</h5>
                    <h6 class="card-subtitle mb-2 text-muted">You Have Purchase/Rental Requests That Need Servicing</h6>
                    <h3>{{$data['purchase/rentrequests']}}</h3>
                    <a href="{{url('rentpurchaserequests')}}" class="card-link">View Requests</a>

                </div>
            </div>
            <div class="card" style="width: 16rem; margin:5%;">
                <div class="card-body text-center">
                    <h5 class="card-title">Sell Requests</h5>
                    <h6 class="card-subtitle mb-2 text-muted">You Have Sell Requests That Need Servicing</h6>
                    <h3>{{$data['sellrequests']}}</h3>
                    <a href="{{url('sellrequests')}}" class="card-link">View Requests</a>
                </div>
            </div>
    </div>

</div>

@endsection