<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'email', 'working_hours',];

    protected function casts(): array
    {
        return [
            'Weekday' => 'date:Y-m-d',
            'joined_at' => 'datetime:Y-m-d H:00',
        ];
    }

}
