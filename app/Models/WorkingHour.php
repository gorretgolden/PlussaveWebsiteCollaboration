<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingHour extends Model
{
    use HasFactory;
    protected $fillable = ['day', 'opening_time', 'closing_time', 'is_closed'];

<<<<<<< HEAD

=======
    public function getOpeningTimeAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('h:i A');
    }

    public function getClosingTimeAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('h:i A');
    }
>>>>>>> 100321af48ff6d29fcabb57df61298fc329fe147
}

