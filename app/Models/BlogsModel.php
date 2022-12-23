<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogsModel extends Model
{
    use HasFactory;
    protected $table='tbl_blogs';
    protected $primaryKey='blog_id';
    protected $fillable=['blogtext','updated_at','created_at','is_deleted'];
}
