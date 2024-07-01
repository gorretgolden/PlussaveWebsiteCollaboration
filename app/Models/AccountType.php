<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    public function features()
    {
        return $this->hasMany(AccountTypeFeature::class);
    }

    public function benefits()
    {
        return $this->hasMany(AccountTypeBenefit::class);
    }

}
