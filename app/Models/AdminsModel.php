<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminsModel extends Model
{
    use HasFactory;
    protected $table='tbl_admins';
    protected $primaryKey='adminid';
    protected $fillable=['adminname','email', 'password','phone','phone_code','updated_at','created_at','is_deleted'];
}
