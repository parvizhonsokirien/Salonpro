<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['service_categories_id', 'name', 'description',
        'duration', 'price', 'employee_price',];

    public function service_categories()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_categories_id');
    }

}
