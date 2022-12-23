<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellrequestsModel extends Model
{
    use HasFactory;
    protected $table='tbl_sellrequest';
    protected $primaryKey='seller_requestid';
    protected $fillable=['firstname', 'lastname','email','phone','country_code','property_description','house_type','listing_type','full_address','location','neighborhood','floor','total_bedrooms','total_bathrooms','doorman','storage','elavator','washer','natural_lighting','laundry_room','high_ceiling','pet_policy','updated_at','created_at','is_deleted'];
}
