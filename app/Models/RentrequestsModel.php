<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentrequestsModel extends Model
{
    use HasFactory;
    protected $table='tbl_rentrequest';
    protected $primaryKey='rent_requestid';
    protected $fillable=['property_id','firstname', 'lastname','email','phone','country_code','created_at','is_deleted'];
}
