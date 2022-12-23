<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountriesModel extends Model
{
    use HasFactory;
    protected $table='tbl_countries';
    protected $primaryKey='id';
    protected $fillable=['iso','name', 'nickname','numcode','phone_code'];
}
