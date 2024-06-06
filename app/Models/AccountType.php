<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountType extends Model

{
    use HasFactory;
    protected $fillable = ['type', 'title', 'sub_title', 'type','button_text'];
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }
}
