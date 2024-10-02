<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingHour extends Model
{
    use HasFactory;
    protected $fillable = ['day', 'opening_time', 'closing_time', 'is_closed'];

    public function getOpeningTimeAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('h:i A');
    }

    public function getClosingTimeAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('h:i A');
    }
}

