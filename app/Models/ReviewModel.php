<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewModel extends Model
{
    use HasFactory;
    protected $table='tbl_reviews';
    protected $primaryKey='review_id';
    protected $fillable=['full_name','review', 'rating','updated_at','created_at','is_deleted'];
}

