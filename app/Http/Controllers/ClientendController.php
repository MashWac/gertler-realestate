<?php

namespace App\Http\Controllers;

use App\Models\BlogsModel;
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
        $data['locations']=LocationsModel::where('is_deleted',0)->paginate(5);
        $data['listings']=PropertyModel::where('is_deleted',0)->orderBy('starting_price','asc')->paginate(6);
        $data['count']= PropertyModel::where('is_deleted',0)->count();
        return view('clientend.homepage', compact('data'));
    }
    public function filteropts($id){
        $strid=strval($id);
        $data['locations']=LocationsModel::where('is_deleted',0)->paginate(5);
        $data['listings']=PropertyModel::join('tbl_locations','tbl_propertydetails.neighborhood','=','tbl_locations.name')->where('tbl_locations.location_id',$id)->orderBy('starting_price','asc')->paginate(6); 
        $data['count']=PropertyModel::join('tbl_locations','tbl_propertydetails.neighborhood','=','tbl_locations.name')->where('tbl_locations.location_id',$id)->count(); 

        return view('clientend.homepage', compact('data'));

    }
    public function aboutus(){
        return view('clientend.about');
    }
    public function houselistings($str){
                
        if($str=='sall'){
            $data['house_type']='buyrent';
            $data['location']='all';
            $data['listing_type']='buyrent';
            $data['orderby']='priceascending';
            $data['pricemin']=NULL;
            $data['pricemax']=NULL;
            $data['counties']=LocationsModel::all();
            $data['listings']=PropertyModel::where('listing_type','buyrent')->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy('tbl_propertydetails.starting_price','asc')->paginate(4);
            $data['count']=PropertyModel::where('listing_type','buyrent')->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy('tbl_propertydetails.starting_price','asc')->count();

        }elseif($str=='buy'){
            $data['house_type']='buy';
            $data['location']='all';
            $data['listing_type']='buy';
            $data['orderby']='priceascending';
            $data['pricemin']=NULL;
            $data['pricemax']=NULL;
            $data['counties']=LocationsModel::all();
            $data['listings']=PropertyModel::where('listing_type','buy')->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy('tbl_propertydetails.starting_price','asc')->paginate(4);
            $data['count']=PropertyModel::where('listing_type','buy')->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy('tbl_propertydetails.starting_price','asc')->count();
        }elseif($str=='rent'){
            $data['house_type']='rent';
            $data['location']='all';
            $data['listing_type']='rent';
            $data['orderby']='priceascending';
            $data['pricemin']=NULL;
            $data['pricemax']=NULL;
            $data['counties']=LocationsModel::all();
            $data['listings']=PropertyModel::where('listing_type','rent')->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy('tbl_propertydetails.starting_price','asc')->paginate(4);
            $data['count']=PropertyModel::where('listing_type','rent')->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy('tbl_propertydetails.starting_price','asc')->count();
        }else{
            $data['house_type']='all';
            $data['location']='all';
            $data['listing_type']='all';
            $data['orderby']='priceascending';
            $data['pricemin']=NULL;
            $data['pricemax']=NULL;
            $data['counties']=LocationsModel::all();
            $data['listings']=PropertyModel::where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy('tbl_propertydetails.starting_price','asc')->paginate(4);
            $data['count']=PropertyModel::where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy('tbl_propertydetails.starting_price','asc')->count();
        }
        return view('clientend.houselistings',compact('data'));
    }
    public function filterproperties(Request $request){

        $data['house_type']='all';
        $data['location']='all';
        $data['listing_type']='all';
        $data['pricemin']=NULL;
        $data['pricemax']=NULL;
        $data['counties']=LocationsModel::all();
        if($request->input('minprice')){
            $minprice=$request->input('minprice');
            $data['pricemin']=$request->input('minprice');
        }else{
            $minprice=0;
            $data['pricemin']=NULL;
        }
        if($request->input('maxprice')){
            $data['pricemax']=$request->input('maxprice');
            $maxprice=$request->input('maxprice'); 
        }else{
            $data['pricemax']=NULL;
            $maxprice=1000000000; 
        }

        if($request->input('orderby')=='priceascending'||$request->input('orderby')=='oldtonew'){
            $orderreal='ASC';
            if($request->input('orderby')=='priceascending'){
                $data['orderby']='priceascending';

                $orderby='tbl_propertydetails.starting_price';
            }else{
                $data['orderby']='oldtonew';

                $orderby='tbl_propertydetails.created_at';
            }

        }else{
            $orderreal='DESC';
            if($request->input('orderby')=='pricedescending'){
                $data['orderby']='pricedescending';

                $orderby='tbl_propertydetails.starting_price';
            }else{
                $data['orderby']='newtoold';
                $orderby='tbl_propertydetails.created_at';
            }
            
        }
        if($request->input('selectedlocation')){
            $location=$request->input('selectedlocation');
            $data['location']=$request->input('selectedlocation');
            if($request->input('housetype')!='all'){
                $data['house_type']=$request->input('housetype');
                $housetype=$request->input('housetype');
                if($request->input('listingtype')!='all'){
                    $data['listing_type']=$request->input('listingtype');
                    $listingtype=$request->input('listingtype');
                    $data['listings']=PropertyModel::where('tbl_propertydetails.neighborhood',$location)->where('tbl_propertydetails.house_type',$housetype)->where('tbl_propertydetails.listing_type',$listingtype)->where('tbl_propertydetails.starting_price','>=',$minprice)->where('tbl_propertydetails.starting_price','<=',$maxprice)->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy($orderby,$orderreal)->paginate(4);
                    $data['count']=PropertyModel::where('tbl_propertydetails.neighborhood',$location)->where('tbl_propertydetails.house_type',$housetype)->where('tbl_propertydetails.listing_type',$listingtype)->where('tbl_propertydetails.starting_price','>=',$minprice)->where('tbl_propertydetails.starting_price','<=',$maxprice)->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy($orderby,$orderreal)->count();


                }else{
                    $data['listing_type']='all';
                    $listingtype=['buy','rent','buyrent'];
                    $data['listings']=PropertyModel::where('tbl_propertydetails.neighborhood',$location)->where('tbl_propertydetails.house_type',$housetype)->whereIn('tbl_propertydetails.listing_type',$listingtype)->where('tbl_propertydetails.starting_price','>=',$minprice)->where('tbl_propertydetails.starting_price','<=',$maxprice)->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy($orderby,$orderreal)->paginate(4);
                    $data['count']=PropertyModel::where('tbl_propertydetails.neighborhood',$location)->where('tbl_propertydetails.house_type',$housetype)->whereIn('tbl_propertydetails.listing_type',$listingtype)->where('tbl_propertydetails.starting_price','>=',$minprice)->where('tbl_propertydetails.starting_price','<=',$maxprice)->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy($orderby,$orderreal)->count();

                }
            }else{
                $data['house_type']='all';
                $housetype=['apartment','bungalow','townhouse','mansion','villa','ranchhouse','condominium','residentialland','commercialland','warehouse','shop','office'];
                if($request->input('listingtype')!='all'){
                    $data['listing_type']=$request->input('listingtype');
                    $listingtype=$request->input('listingtype');
                    $data['listings']=PropertyModel::where('tbl_propertydetails.neighborhood',$location)->whereIn('tbl_propertydetails.house_type',$housetype)->where('tbl_propertydetails.listing_type',$listingtype)->where('tbl_propertydetails.starting_price','>=',$minprice)->where('tbl_propertydetails.starting_price','<=',$maxprice)->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy($orderby,$orderreal)->paginate(4);
                    $data['count']=PropertyModel::where('tbl_propertydetails.neighborhood',$location)->whereIn('tbl_propertydetails.house_type',$housetype)->where('tbl_propertydetails.listing_type',$listingtype)->where('tbl_propertydetails.starting_price','>=',$minprice)->where('tbl_propertydetails.starting_price','<=',$maxprice)->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy($orderby,$orderreal)->count();

                }else{
                    $data['listing_type']='all';
                    $listingtype=['buy','rent','buyrent'];
                    $data['listings']=PropertyModel::where('tbl_propertydetails.neighborhood',$location)->whereIn('tbl_propertydetails.house_type',$housetype)->whereIn('tbl_propertydetails.listing_type',$listingtype)->where('tbl_propertydetails.starting_price','>=',$minprice)->where('tbl_propertydetails.starting_price','<=',$maxprice)->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy($orderby,$orderreal)->paginate(4);
                    $data['count']=PropertyModel::where('tbl_propertydetails.neighborhood',$location)->whereIn('tbl_propertydetails.house_type',$housetype)->whereIn('tbl_propertydetails.listing_type',$listingtype)->where('tbl_propertydetails.starting_price','>=',$minprice)->where('tbl_propertydetails.starting_price','<=',$maxprice)->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy($orderby,$orderreal)->count();

                }
            }

        }else{
            $data['location']='all';
            if($request->input('housetype')!='all'){
                $data['house_type']=$request->input('housetype');
                $housetype=$request->input('housetype');
                if($request->input('listingtype')!='all'){
                    $data['listing_type']=$request->input('listingtype');
                    $listingtype=$request->input('listingtype');
                    $data['listings']=PropertyModel::where('tbl_propertydetails.house_type',$housetype)->where('tbl_propertydetails.listing_type',$listingtype)->where('tbl_propertydetails.starting_price','>=',$minprice)->where('tbl_propertydetails.starting_price','<=',$maxprice)->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy($orderby,$orderreal)->paginate(4);
                    $data['count']=PropertyModel::where('tbl_propertydetails.house_type',$housetype)->where('tbl_propertydetails.listing_type',$listingtype)->where('tbl_propertydetails.starting_price','>=',$minprice)->where('tbl_propertydetails.starting_price','<=',$maxprice)->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy($orderby,$orderreal)->count();

                }else{
                    $data['listing_type']='all';
                    $listingtype=['buy','rent','buyrent'];
                    $data['listings']=PropertyModel::where('tbl_propertydetails.house_type',$housetype)->whereIn('tbl_propertydetails.listing_type',$listingtype)->where('tbl_propertydetails.starting_price','>=',$minprice)->where('tbl_propertydetails.starting_price','<=',$maxprice)->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy($orderby,$orderreal)->paginate(4);
                    $data['count']=PropertyModel::where('tbl_propertydetails.house_type',$housetype)->whereIn('tbl_propertydetails.listing_type',$listingtype)->where('tbl_propertydetails.starting_price','>=',$minprice)->where('tbl_propertydetails.starting_price','<=',$maxprice)->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy($orderby,$orderreal)->count();

                }
            }else{
                $data['house_type']='all';
                $housetype=['apartment','bungalow','townhouse','mansion','villa','ranchhouse','condominium','residentialland','commercialland','warehouse','shop','office'];
                if($request->input('listingtype')!='all'){
                    $data['listing_type']=$request->input('listingtype');
                    $listingtype=$request->input('listingtype');
                    $data['listings']=PropertyModel::whereIn('tbl_propertydetails.house_type',$housetype)->where('tbl_propertydetails.listing_type',$listingtype)->where('tbl_propertydetails.starting_price','>=',$minprice)->where('tbl_propertydetails.starting_price','<=',$maxprice)->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy($orderby,$orderreal)->paginate(4);
                    $data['count']=PropertyModel::whereIn('tbl_propertydetails.house_type',$housetype)->where('tbl_propertydetails.listing_type',$listingtype)->where('tbl_propertydetails.starting_price','>=',$minprice)->where('tbl_propertydetails.starting_price','<=',$maxprice)->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy($orderby,$orderreal)->count();

                }else{
                    $data['listing_type']='all';
                    $listingtype=['buy','rent','buyrent'];
                    $data['listings']=PropertyModel::whereIn('tbl_propertydetails.house_type',$housetype)->whereIn('tbl_propertydetails.listing_type',$listingtype)->where('tbl_propertydetails.starting_price','>=',$minprice)->where('tbl_propertydetails.starting_price','<=',$maxprice)->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy($orderby,$orderreal)->paginate(4);
                    $data['count']=PropertyModel::whereIn('tbl_propertydetails.house_type',$housetype)->whereIn('tbl_propertydetails.listing_type',$listingtype)->where('tbl_propertydetails.starting_price','>=',$minprice)->where('tbl_propertydetails.starting_price','<=',$maxprice)->where('tbl_propertydetails.is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->orderBy($orderby,$orderreal)->count();

                }
            }
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
            'sellerphone' => ['required','min:9'],
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
            return redirect('/')->with('status','Request Sent. We Will Get In Touch Soon');
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
            'sellerphone' => ['required','min:9'],
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
            return redirect('/')->with('status','Request Sent. We Will Get In Touch Soon');
        }else{
            return redirect('')->with('status','Listing Addition failed.');

        }

    }
    public function privacy(){
        return view('clientend.privacy');
    }
    public function blogpage(){
        $data['blogs']=BlogsModel::paginate(4);
        $data['count']=BlogsModel::count();
        return view('clientend.bloglanding',compact('data'));
    }
    public function searchblogs(Request $request){
      
        $data['orderby']='newtoold';
        $blogname=$request->input('searchproperty');
        $data['description']=BlogsModel::where('tbl_blogs.description', 'like', '%'. $blogname . '%')->paginate(4);
        $data['title']=BlogsModel::where('tbl_blogs.title', 'like', '%'. $blogname . '%')->paginate(4);
        if(count($data['title'])!=0){
            $data['blogs']=$data['title'];
            $data['count']= BlogsModel::where('tbl_blogs.title', 'like', '%'. $blogname . '%')->count();
        }
        if(count($data['description'])!=0){
            $data['blogs']=$data['description'];
            $data['count']=BlogsModel::where('tbl_blogs.description', 'like', '%'. $blogname . '%')->count();
        }
        else{
            $data['blogs']=BlogsModel::where('tbl_blogs.title', 'like', '%'. $blogname . '%')->paginate(4);
            $data['count']=BlogsModel::where('tbl_blogs.title', 'like', '%'. $blogname . '%')->count();

        }
        return view('clientend.bloglanding',compact('data'));

    }
    public function openblog($id){
        $data['blog']=BlogsModel::where('blog_id',$id)->first();
        return view('clientend.blogpage',compact('data'));
    }
    public function terms(){
        return view('clientend.terms');
    }
}
