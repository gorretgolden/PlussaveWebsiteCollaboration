<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_amount',
        'name',
        'email',
        'phone',
        'loan_type',
        'business_location',
        'loan_purpose',
        'business_nature',
        'residence',
        'status'
    ];
}
