<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetails extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'service_type_id','image'];
    public function account_type()
    {
        return $this->belongsTo(ServiceDetails::class);
    }
}
