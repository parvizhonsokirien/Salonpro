<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'client_phone',
        'client_email',
        'service_id',
        'employee_id',
        'booking_date',
        'status',
        'payment_status',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class,'employee_id');
    }

}
