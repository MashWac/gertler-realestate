<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyimagesModel extends Model
{
    use HasFactory;
    protected $table='tbl_propertyimages';
    protected $primaryKey='propertyimage_id';
    protected $fillable=['property_id','image_url', 'updated_at','created_at','is_deleted'];
}
