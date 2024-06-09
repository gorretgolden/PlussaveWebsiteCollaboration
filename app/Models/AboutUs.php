<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable = ['background_title', 'background_info', 'mission_title','mission','image','vision_title','vision'];
}
