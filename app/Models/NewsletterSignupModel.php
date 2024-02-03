<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterSignupModel extends Model
{
    use HasFactory;
    protected $table='tbl_newsletter_signup';
    protected $primaryKey='newsletter_signup_id';
    protected $fillable=['first_name','surname','email','created_at','updated_at','is_deleted'];
}
