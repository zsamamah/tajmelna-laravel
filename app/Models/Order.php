<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'saloon_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function saloon()
    {
        return $this->belongsTo(Saloon::class);
    }
}
