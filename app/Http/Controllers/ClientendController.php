<?php

namespace App\Http\Controllers;

use App\Models\CountiesModel;
use App\Models\CountriesModel;
use App\Models\LocationsModel;
use App\Models\PropertyimagesModel;
use App\Models\PropertyModel;
use App\Models\PurchaserequestsModel;
use App\Models\RentandPurchaserequestsModel;
use App\Models\RentrequestsModel;
use App\Models\SellrequestsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ClientendController extends Controller
{
    public function landingpage(){
        $data['locations']=LocationsModel::where('is_deleted',0)->paginate(6);
        $data['listings']=PropertyModel::where('is_deleted',0)->get();
        $data['count']= PropertyModel::where('is_deleted',0)->count();
        return view('clientend.homepage', compact('data'));
    }
    public function filteropts($id){
        $strid=strval($id);
        $data['location']='filterbylocation.3';
        $data['locations']=LocationsModel::where('is_deleted',0)->paginate(6);
        $data['listings']=PropertyModel::join('tbl_locations','tbl_propertydetails.neighborhood','=','tbl_locations.name')->where('tbl_locations.location_id',$id)->get(); 
        $data['count']=PropertyModel::join('tbl_locations','tbl_propertydetails.neighborhood','=','tbl_locations.name')->where('tbl_locations.location_id',$id)->count(); 

        return view('clientend.homepage', compact('data'));

    }
    public function aboutus(){
        return view('clientend.about');
    }
    public function houselistings($str){
                
        if($str=='sall'){
            $data['listings']=PropertyModel::where('listing_type','buyrent')->where('is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->paginate(2);

        }elseif($str=='sale'){
            $data['listings']=PropertyModel::where('listing_type','buy')->where('is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->paginate(2);

        }elseif($str=='rent'){
            $data['listings']=PropertyModel::where('listing_type','rent')->where('is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->paginate(2);
       
        }else{
            $data['listings']=PropertyModel::join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->paginate(4);

        }
        return view('clientend.houselistings',compact('data'));
    }
    public function houseview($id){
        $data['counties']=CountiesModel::all();
        $data['countries']=CountriesModel::all();
        $data['locations']=LocationsModel::all()->where('is_deleted',0); 
        $data['images']=PropertyimagesModel::where('property_id',$id)->get();
        $data['property']=PropertyModel::where('property_id',$id)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->first();
        return view('clientend.houseview',compact('data'));
    }
    public function potential(Request $request, $type){
        $request->validate([            
            'sellerfname' => ['required', 'string', 'max:255'],
            'sellerlname' => ['required', 'string', 'max:255'],
            'sellerphone' => ['required','min:10'],
            'selleremail' => ['string', 'email', 'max:255'],
        ]);
        if($type=='rent'){
            $potential=new RentrequestsModel();
        }elseif($type='buy'){
            $potential= new RentandPurchaserequestsModel();

        }else{
            $potential= new PurchaserequestsModel();
        }
        $potential->firstname=$request->input('sellerfname');
        $potential->lastname=$request->input('sellerlname');
        $potential->email=$request->input('selleremail');
        $potential->phone=$request->input('sellerphone');
        $potential->country_code= $request->input('sellercountrycode');
        $potential->property_id= $request->input('propid');
        
        if( $potential->save()){
            return redirect('landing')->with('status','Request Sent. We Will Get In Touch Soon');
        }else{
            return redirect('')->with('status','Listing Addition failed.');

        }
    }
    public function rentout(){
        $data['counties']=CountiesModel::all();
        $data['countries']=CountriesModel::all();
        $data['locations']=LocationsModel::all()->where('is_deleted',0);
        return view('clientend.sellproperty',compact('data'));
    }
    public function requestsell(Request $request){
        $request->validate([            
            'sellerfname' => ['required', 'string', 'max:255'],
            'sellerlname' => ['required', 'string', 'max:255'],
            'sellerphone' => ['required','min:10'],
            'selleremail' => ['string', 'email', 'max:255'],
            'propertydescription'=>['required'],
            'housetype'=>['required', 'string'],
            'listingtype'=>['required', 'string'],
            'propertyaddress' =>['required'],
            'countylocate'=>['required', 'string', 'max:255','exists:App\Models\CountiesModel,name'],
            'neighborhood'=>['required', 'string', 'max:255'],
            'propertyfloor'=>['min:0'],
            'propertybedrooms'=>['min:0'],
            'propertybathrooms'=>['min:0'],
        ]);
        $sellreq=new SellrequestsModel();
        $sellreq->firstname=$request->input('sellerfname');
        $sellreq->lastname=$request->input('sellerlname');
        $sellreq->email=$request->input('selleremail');
        $sellreq->phone=$request->input('sellerphone');
        $sellreq->country_code= $request->input('sellercountrycode');
        $sellreq->property_description=$request->input('propertydescription');
        $sellreq->house_type=$request->input('housetype');
        $sellreq->listing_type=$request->input('listingtype');
        $sellreq->full_address=$request->input('propertyaddress');
        $sellreq->location=$request->input('countylocate');
        $sellreq->neighborhood=$request->input('neighborhood');
        $sellreq->floor=$request->input('propertyfloor');
        $sellreq->total_bedrooms=$request->input('propertybedrooms');
        $sellreq->total_bathrooms=$request->input('propertybathrooms');
        $sellreq->doorman=$request->input('ammenitydoorman');
        $sellreq->storage=$request->input('ammenitystorage');
        $sellreq->elevator=$request->input('ammenityelevator');
        $sellreq->washer=$request->input('ammenitywasher');
        $sellreq->natural_lighting=$request->input('ammenitynatural');
        $sellreq->laundry_room=$request->input('ammenitylaundry');
        $sellreq->high_ceiling=$request->input('ammenityhighceiling');
        $sellreq->pet_policy=$request->input('petpolicy');
        if( $sellreq->save()){
            return redirect('landing')->with('status','Request Sent. We Will Get In Touch Soon');
        }else{
            return redirect('')->with('status','Listing Addition failed.');

        }

    }
}
