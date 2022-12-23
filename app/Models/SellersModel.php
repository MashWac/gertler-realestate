<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellersModel extends Model
{
    use HasFactory;
    protected $table='tbl_sellers';
    protected $primaryKey='sellerid';
    protected $fillable=['firstname', 'lastname','email','phone','country_code','created_at','is_deleted'];
}
