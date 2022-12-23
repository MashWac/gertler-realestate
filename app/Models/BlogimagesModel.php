<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogimagesModel extends Model
{
    use HasFactory;
    protected $table='tbl_blogimages';
    protected $primaryKey='blog_imageid';
    protected $fillable=['blog_images','blog_id', 'updated_at','created_at','is_deleted'];
}
