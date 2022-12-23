<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentandPurchaserequestsModel extends Model
{
    use HasFactory;
    protected $table='tbl_rentandpurchaserequest';
    protected $primaryKey='rentandpurchaserequest_id';
    protected $fillable=['property_id','firstname', 'lastname','email','phone','country_code','created_at','is_deleted'];
}
