<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'amount', 'currency', 'interval'
    ];

    public function getFormattedAmountAttribute()
    {
        return $this->amount / 100 . ' ' . $this->currency;
    }
}
