<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsInformation extends Model
{
    protected $table = 'contact_us';
    use HasFactory;

    protected $fillable = [
        'phone', 'email', 'address', 'twitter', 'instagram'
    ];


}
