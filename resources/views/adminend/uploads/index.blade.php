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
            <h2>Select Option</h2>
        </div>
        <div class="card-body">
            <div class="Accordion" style="margin:2%;">
            <div class=Accorcionitem id="option1">
                    <a class="accordionlink" href="#option1">
                        <p>Click here to go to View All</p>  
                    <ion-icon class="ion-icon" name="add"></ion-icon>
                    <ion-icon class="ion-icon" name="remove"></ion-icon>
                    </a>
                    <div class="answer">
                        <div class="card text-center">
                            <div class="card-header">
                                Click to View All House listings.
                            </div>
                            <div class="card-body">
                                <a href="{{url('viewpurchaselistings/sall')}}">
                                <button class="btn btn-primary">View Listings</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=Accorcionitem id="option2">
                    <a class="accordionlink" href="#option2"><p>Click here to go to Properties on sale</p>  
                    <ion-icon class="ion-icon" name="add"></ion-icon>
                    <ion-icon class="ion-icon" name="remove"></ion-icon>
                    </a>
                    <div class="answer">
                        <div class="card text-center">
                            <div class="card-header">
                                Click to View House listings you have put up for purchase.
                            </div>
                            <div class="card-body">
                                <a href="{{url('viewpurchaselistings/sale')}}">
                                <button class="btn btn-primary">View Listings</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=Accorcionitem id="option3">
                    <a class="accordionlink" href="#option3">
                        <p>Click here to go to property for rental</p>  
                    <ion-icon class="ion-icon" name="add"></ion-icon>
                    <ion-icon class="ion-icon" name="remove"></ion-icon>
                    </a>
                    <div class="answer">
                        <div class="card text-center">
                            <div class="card-header">
                                Click to View House listings you have put up for rent.
                            </div>
                            <div class="card-body">
                                <a href="{{url('viewpurchaselistings/rent')}}">
                                <button class="btn btn-primary">View Listings</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=Accorcionitem id="option4">
                    <a class="accordionlink" href="#option4">
                        <p>Click here to go to property for Purchase/rental</p>  
                    <ion-icon class="ion-icon" name="add"></ion-icon>
                    <ion-icon class="ion-icon" name="remove"></ion-icon>
                    </a>
                    <div class="answer">
                        <div class="card text-center">
                            <div class="card-header">
                                Click to View House listings you have put up for rent.
                            </div>
                            <div class="card-body">
                                <a href="{{url('viewpurchaselistings/mixed')}}">
                                <button class="btn btn-primary">View Listings</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-center d-flex justify-content-center">
        </div>
    </div>

@endsection