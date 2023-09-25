<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'whatsapp',
        'visitor',
        'date',
        'no_table',
        'start_time',
        'finish_time',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
