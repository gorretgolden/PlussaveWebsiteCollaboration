<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountTypeBenefit extends Model
{
    use HasFactory;
    protected $fillable = [
        'account_type_id',
        'benefit',
    ];

    public function accountType()
    {
        return $this->belongsTo(AccountType::class);
    }
}
