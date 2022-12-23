<?php

namespace App\Http\Controllers;

use App\Models\AdminsModel;
use App\Models\CountiesModel;
use App\Models\CountriesModel;
use App\Models\LocationsModel;
use App\Models\PropertyimagesModel;
use App\Models\PropertyModel;
use App\Models\SellersModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminendController extends Controller
{
    public function dashboard(){
        return view('adminend.dashboard.dashboard');
    }
    
    public function viewadmins(){
        $data['admins']=AdminsModel::where('is_deleted',0)->paginate(10);
        return view('adminend.admins.viewusers',compact('data'));
    }
    public function addadmin(){
        $data['formtype']="add";
        return view('adminend.admins.editprofile',compact('data'));
    }
    public function insertadmin(Request $request){
        $user=new AdminsModel();
        $request->validate([            
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'max:10','min:10'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password'=>['required'],
            'conpass'=>['required']
        ]);
        $pass=$request->input('password');
        $conn=$request->input('conpass');
        if($pass=$conn){
            $user->adminname=$request->input('name');
            $user->email=$request->input('email');
            $user->phone=$request->input('phone');
            $user->password=Hash::make($pass);
        }
        $user->save();
        return redirect()->back()->with('status','User Added Successfully.');
    }
    public function editadmin($id){
        $data['formtype']="edit";
        $data['admin']=AdminsModel::find($id);
        return view('adminend.admins.editprofile',compact('data'));
    }
    public function updateadmin(Request $request, $id){
        $user=AdminsModel::find($id);
        $request->validate([            
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'max:10','min:10'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],

        ]);
        $pass=$request->input('password');
        $conn=$request->input('conpass');
        $user->adminname=$request->input('name');
        $user->email=$request->input('email');
        $user->phone=$request->input('phone');
        if($pass){
            if($pass==$conn){
                $user->password=Hash::make($pass);
            }
        }
        $user->update();
        return redirect('viewusers')->with('status','User Updated Successfully.');
    }
    public function deleteadmin($id){
        $user=AdminsModel::find($id);
        $user->delete();
        return redirect('viewusers')->with('status','User Deleted Successfully.');

    }
    public function locations(){
        $locations=LocationsModel::all()->where('is_deleted',0);
        return view('adminend.locations.index',compact('locations'));
    }
    public function addlocations(){
        $data['formtype']='add';
        $data['counties']=CountiesModel::all();
        return view('adminend.locations.add',compact('data'));
    }
    public function insertlocations(Request $request){
        $request->validate([            
            'locationname' => ['required', 'string', 'max:255'],
            'countylocate'=> ['required', 'string', 'max:255','exists:App\Models\CountiesModel,name']
        ]);
        $location= new LocationsModel();
        $propertylocation=$request->input('locationname');
        $propertylocation=strtoupper($propertylocation);
        $location->name=$propertylocation;
        $location->county=$request->input('countylocate');
        
        if( $location->save()){
            return redirect('locations')->with('status','Location Added Successfully.');
        }else{
            return redirect('add-location')->with('status','Location Add failed.');

        }
       
    }
    public function editlocation($id){
        $data['formtype']="edit";
        $data['counties']= CountiesModel::all();
        $data['location']=LocationsModel::find($id);

        return view('adminend.locations.add',compact('data'));
    }
    public function updatelocation(Request $request,$id){
        $request->validate([            
            'locationname' => ['required', 'string', 'max:255'],
            'countylocate'=> ['required', 'string', 'max:255','exists:App\Models\CountiesModel,name']
        ]);
        $location= LocationsModel::find($id);
        $propertylocation=$request->input('locationname');
        $propertylocation=strtoupper($propertylocation);
        $location->name=$propertylocation;
        $location->county=$request->input('countylocate');
        if( $location->update()){
            return redirect('locations')->with('status','Location Updated Successfully.');
        }else{
            return redirect('locations')->with('status','Location Update failed.');

        }
    }
    public function deletelocation($id){
        $location= LocationsModel::find($id);
        if( $location->delete()){
            return redirect('locations')->with('status','Location Deleted Successfully.');
        }else{
            return redirect('locations')->with('status','Location Deletion failed.');

        }

    }

    public function uploads(){
        return view('adminend.uploads.index');
    }
    public function addlisting(){
        $data['formtype']='add';
        $data['counties']=CountiesModel::all();
        $data['countries']=CountriesModel::all();
        $data['locations']=LocationsModel::all()->where('is_deleted',0);
        return view('adminend.uploads.add', compact('data'));
    }
    public function uploadhousedetails(Request $request){
        // validate
        $request->validate([            
            'sellerfname' => ['required', 'string', 'max:255'],
            'sellerlname' => ['required', 'string', 'max:255'],
            'sellerphone' => ['required', 'max:10','min:10'],
            'selleremail' => ['string', 'email', 'max:255'],
            'propertyname'=>['required', 'string', 'max:255'],
            'propertydescription'=>['required'],
            'housetype'=>['required', 'string'],
            'listingtype'=>['required', 'string'],
            'propertyaddress' =>['required'],
            'countylocate'=>['required', 'string', 'max:255','exists:App\Models\CountiesModel,name'],
            'neighborhood'=>['required', 'string', 'max:255'],
            'propertystartprice'=>['required','min:0'],
            'propertyfloor'=>['min:0'],
            'acreage'=>['min:0',],
            'sqft'=>['min:0',],
            'propertybedrooms'=>['min:0'],
            'propertybathrooms'=>['min:0'],
            'mainimage'=>['required']
        ]);
        $selleremail=$request->input('selleremail');
        $sellers=new SellersModel();
        $seller=$sellers->where('email',$selleremail)->first();

        if(!$seller){
            $seller=new SellersModel();
            $seller->firstname=$request->input('sellerfname');
            $seller->lastname=$request->input('sellerlname');
            $seller->email=$request->input('selleremail');
            $seller->phone=$request->input('sellerphone');
            $seller->country_code= $request->input('sellercountrycode');
            $seller->save();
            $sellerid=$seller->sellerid;

        }else{
            $sellerid=$seller->sellerid;

        }
    
        $property=new PropertyModel();
        if($request->hasFile('mainimage')){
            $file=$request->file('mainimage');
            $ext=$file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $filepath='public/assets/uploads/properties/'.$filename;
            $path = Storage::disk('s3')->put($filepath,file_get_contents($file));
            $path = Storage::url($filepath);
            $property->mainphoto=$path;
        }
        $otherimagesurl=[];
        if($request->hasFile('otherimages')){
            $count=0;
            foreach($request->file('otherimages') as $file){
                $ext=$file->getClientOriginalExtension();
                $filename= time().$count.'.'.$ext;
                $filepath='public/assets/uploads/properties/'.$filename;
                $path = Storage::disk('s3')->put($filepath,file_get_contents($file));
                $path = Storage::url($filepath);
                array_push($otherimagesurl,$path);
                $count=$count+1;
            }      
        }     
        $property->seller_id=$sellerid;
        $property->property_name=$request->input('propertyname');
        $property->property_description=$request->input('propertydescription');
        $property->house_type=$request->input('housetype');
        $property->listing_type=$request->input('listingtype');
        $property->full_address=$request->input('propertyaddress');
        $property->location=$request->input('countylocate');
        $loc=new LocationsModel();
        $propertylocation=$request->input('neighborhood');
        $propertylocation=strtoupper($propertylocation);
        $location=$loc->where('name',$propertylocation)->first();
        if(!$location){
            $location= new LocationsModel();
            $location->name=$propertylocation;
            $location->county=$request->input('countylocate');
            $location->save();
        }
        $property->neighborhood=$propertylocation;
        $property->land_details=$request->input('landdetails');
        $property->building_details=$request->input('buildingdetails');
        $property->apartment_details=$request->input('apartmentdetails');
        $property->starting_price=$request->input('propertystartprice');
        $property->end_price=$request->input('propertyendprice');
        $property->floor=$request->input('propertyfloor');
        $property->acreage=$request->input('acreage');
        $property->square_feet=$request->input('sqft');
        $property->total_bedrooms=$request->input('propertybedrooms');
        $property->total_bathrooms=$request->input('propertybathrooms');
        $property->doorman=$request->input('ammenitydoorman');
        $property->storage=$request->input('ammenitystorage');
        $property->elevator=$request->input('ammenityelevator');
        $property->washer=$request->input('ammenitywasher');
        $property->natural_lighting=$request->input('ammenitynatural');
        $property->laundry_room=$request->input('ammenitylaundry');
        $property->high_ceiling=$request->input('ammenityhighceiling');
        $property->pet_policy=$request->input('petpolicy');


        if( $property->save()){
            $propertyid=$property->property_id;
            foreach($otherimagesurl as $item){
                $propertyimage=new PropertyimagesModel();
                $propertyimage->property_id=$propertyid;
                $propertyimage->image_url=$item;
                $propertyimage->save();
            }
            return redirect('uploads')->with('status','Product Added Successfully.');
        }else{
            return redirect('')->with('status','Listing Addition failed.');

        }

    }
    
    public function editproperty($id){
        $data['formtype']="edit";
        $data['counties']= CountiesModel::all();
        $data['countries']=CountriesModel::all();
        $data['locations']=LocationsModel::all()->where('is_deleted',0);
        $data['listing']=PropertyModel::where('property_id',$id)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->first();
        $data['images']=PropertyimagesModel::where('property_id',$id)->get();
        $data['count']=PropertyimagesModel::where('property_id',$id)->count();

        return view('adminend.uploads.add', compact('data'));
    }

    public function editimages($id){
        $data['listing']=PropertyModel::where('property_id',$id)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->first();
        $data['images']=PropertyimagesModel::where('property_id',$id)->get();
        $data['count']=PropertyimagesModel::where('property_id',$id)->count();

        return view('adminend.uploads.editimages', compact('data'));
    }
    public function updateimages(Request $request, $id){
        $property=PropertyimagesModel::where('propertyimage_id',$id)->first();
        if($request->file('otherimages')){
            $images  = $request->file('otherimages');
            foreach($images as $key=>$image){
                if($key==$id){
                    $file=$image;
                    $ext=$image->getClientOriginalExtension();
                    $filename= time().'.'.$ext;
                    $filepath='public/assets/uploads/properties/'.$filename;
                    $path = Storage::disk('s3')->put($filepath,file_get_contents($file));
                    $path = Storage::url($filepath);
                    $property->image_url=$path;
                }             }
          }


        if( $property->update()){
            return redirect()->back()->with('status','Image Updated Successfully.');
        }else{
            return redirect()->back()->with('status','Image Update Failed.');

        }
        
        
    }
    public function addimages(Request $request,$id){
        $otherimagesurl=[];
        if($request->hasFile('addedimages')){
            $count=0;
            foreach($request->file('addedimages') as $file){
                $ext=$file->getClientOriginalExtension();
                $filename= time().$count.'.'.$ext;
                $filepath='public/assets/uploads/properties/'.$filename;
                $path = Storage::disk('s3')->put($filepath,file_get_contents($file));
                $path = Storage::url($filepath);
                array_push($otherimagesurl,$path);
                $count=$count+1;
            }      
        } 
        foreach($otherimagesurl as $item){
            $propertyimage=new PropertyimagesModel();
            $propertyimage->property_id=$id;
            $propertyimage->image_url=$item;
            $propertyimage->save();
        }
        return redirect()->back()->with('status','Image Added Successfully.');

    }

    public function deleteimages($id){
        $image=PropertyimagesModel::find($id);
        $image_url=$image->image_url;
        Storage::delete($image_url);
        $image->delete();
        return redirect()->back()->with('status','Image Deleted Successfully.');

    }


    public function updateproperty(Request $request,$id){
        // validate
        $request->validate([            
            'sellerfname' => ['required', 'string', 'max:255'],
            'sellerlname' => ['required', 'string', 'max:255'],
            'sellerphone' => ['required'],
            'selleremail' => ['string', 'email', 'max:255'],
            'propertyname'=>['required', 'string', 'max:255'],
            'propertydescription'=>['required'],
            'housetype'=>['required', 'string'],
            'listingtype'=>['required', 'string'],
            'propertyaddress' =>['required'],
            'countylocate'=>['required', 'string', 'max:255','exists:App\Models\CountiesModel,name'],
            'neighborhood'=>['required', 'string', 'max:255'],
            'propertystartprice'=>['required','min:0'],
            'propertyfloor'=>['min:0'],
            'acreage'=>['min:0',],
            'sqft'=>['min:0',],
            'propertybedrooms'=>['min:0'],
            'propertybathrooms'=>['min:0']
        ]);
        $selleremail=$request->input('selleremail');
        $sellers=new SellersModel();
        $seller=$sellers->where('email',$selleremail)->first();

        if(!$seller){
            $seller=new SellersModel();
            $seller->firstname=$request->input('sellerfname');
            $seller->lastname=$request->input('sellerlname');
            $seller->email=$request->input('selleremail');
            $seller->phone=$request->input('sellerphone');
            $seller->country_code= $request->input('sellercountrycode');
            $seller->save();
            $sellerid=$seller->sellerid;

        }else{
            $sellerid=$seller->sellerid;

        }
    
        $property=PropertyModel::find($id);
        if($request->hasFile('mainimage')){
            $file=$request->file('mainimage');
            $ext=$file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $filepath='public/assets/uploads/properties/'.$filename;
            $path = Storage::disk('s3')->put($filepath,file_get_contents($file));
            $path = Storage::url($filepath);
            $property->mainphoto=$path;
        }
    
        $property->seller_id=$sellerid;
        $property->property_name=$request->input('propertyname');
        $property->property_description=$request->input('propertydescription');
        $property->house_type=$request->input('housetype');
        $property->listing_type=$request->input('listingtype');
        $property->full_address=$request->input('propertyaddress');
        $property->location=$request->input('countylocate');
        $loc=new LocationsModel();
        $propertylocation=$request->input('neighborhood');
        $propertylocation=strtoupper($propertylocation);
        $location=$loc->where('name',$propertylocation)->first();
        if(!$location){
            $location= new LocationsModel();
            $location->name=$propertylocation;
            $location->county=$request->input('countylocate');
            $location->save();
        }
        $property->neighborhood=$propertylocation;
        $property->land_details=$request->input('landdetails');
        $property->building_details=$request->input('buildingdetails');
        $property->apartment_details=$request->input('apartmentdetails');
        $property->starting_price=$request->input('propertystartprice');
        $property->end_price=$request->input('propertyendprice');
        $property->floor=$request->input('propertyfloor');
        $property->acreage=$request->input('acreage');
        $property->square_feet=$request->input('sqft');
        $property->total_bedrooms=$request->input('propertybedrooms');
        $property->total_bathrooms=$request->input('propertybathrooms');
        $property->doorman=$request->input('ammenitydoorman');
        $property->storage=$request->input('ammenitystorage');
        $property->elevator=$request->input('ammenityelevator');
        $property->washer=$request->input('ammenitywasher');
        $property->natural_lighting=$request->input('ammenitynatural');
        $property->laundry_room=$request->input('ammenitylaundry');
        $property->high_ceiling=$request->input('ammenityhighceiling');
        $property->pet_policy=$request->input('petpolicy');

        if( $property->update()){
            return redirect()->back()->with('status','Property Updated Successfully.');
        }else{
            return redirect()->back()->with('status','Property Update Failed.');

        }

    }
    public function deleteproperty($id){
        $property=PropertyModel::find($id);
        $property->is_deleted=1;
        PropertyimagesModel::where('property_id',$id)->delete();
        $property->delete();
        return redirect()->back()->with('status','Property Deleted Successfully.');

    }
    
    public function purchaserequests(){
        return view('adminend.purchaserequests.index');
    }
    public function rentalrequests(){
        return view('adminend.rentrequests.index');
    }
    public function sellrequests(){
        return view('adminend.sellrequests.index');
    }
    public function blogs(){
        return view('adminend.blogs.index');
    }
    public function viewpurchaselistings($str){
        
        if($str=='sall'){
            $data['properties']=PropertyModel::join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->paginate(2);

        }elseif($str=='sale'){
            $data['properties']=PropertyModel::where('listing_type','buy')->where('is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->paginate(2);

        }elseif($str=='rent'){
            $data['properties']=PropertyModel::where('listing_type','rent')->where('is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->paginate(2);

            
        }else{
            $data['properties']=PropertyModel::where('listing_type','buyrent')->where('is_deleted',0)->join('tbl_sellers','tbl_propertydetails.seller_id','=','tbl_sellers.sellerid')->paginate(2);

        }

        return view('adminend.uploads.view', compact('data'));
    }
    


}
