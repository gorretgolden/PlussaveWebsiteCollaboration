<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientTestimonial extends Model
{
    protected $fillable = ['client_name', 'testimonial', 'media_type', 'media_url', 'client_image'];
}
