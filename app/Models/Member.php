<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'other_name',
        'physical_address',
        'gender',
        'mobile_number',
        'other_mobile_number',
        'date_of_birth',
        'place_of_work',
        'email',
        'identification_type',
        'identification_number',
        'occupation',
        'account_type',
    ];
}
