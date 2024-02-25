<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyModel extends Model
{
    use HasFactory;
    protected $table='tbl_propertydetails';
    protected $primaryKey='property_id';
    protected $fillable=['property_name','house_rank','property_description','house_type','listing_type','full_address','location','neighborhood','land_details','building_details','apartment_details','starting_price','end_price','floor','acreage','square_feet','total_bedrooms','total_bathrooms','mainphoto','doorman','storage','elevator','washer','natural_lighting','laundry_room','high_ceiling','pet_policy','updated_at','created_at','is_deleted'];
}
