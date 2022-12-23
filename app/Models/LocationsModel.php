<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationsModel extends Model
{
    use HasFactory;
    protected $table='tbl_locations';
    protected $primaryKey='location_id';
    protected $fillable=['name','county','created_at','updated_at','is_deleted'];
}
