<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    public function baseCurrency()
    {
        return $this->belongsTo(Currency::class, 'base_currency_id');
    }

    public function quoteCurrency()
    {
        return $this->belongsTo(Currency::class, 'quote_currency_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
