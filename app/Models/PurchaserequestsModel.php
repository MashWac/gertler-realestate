<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaserequestsModel extends Model
{
    use HasFactory;
    protected $table='tbl_purchaserequest';
    protected $primaryKey='purchaserequest_id';
    protected $fillable=['property_id','firstname', 'lastname','email','phone','country_code','created_at','is_deleted'];
}
