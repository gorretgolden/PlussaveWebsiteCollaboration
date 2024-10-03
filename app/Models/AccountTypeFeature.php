<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountTypeFeature extends Model
{
    use HasFactory;
    protected $fillable = [
        'account_type_id',
        'feature',
    ];

    public function accountType()
    {
        return $this->belongsTo(AccountType::class);
    }
}
