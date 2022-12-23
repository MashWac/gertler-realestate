<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountiesModel extends Model
{
    use HasFactory;
    protected $table='tbl_counties';
    protected $primaryKey='county_id';
    protected $fillable=['name', 'created_at','updated_at'];
}
