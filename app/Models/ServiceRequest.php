<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;

    // Define the fillable fields (or you can use guarded instead)
    protected $fillable = [
        'name',
        'phone',
        'email',
        'location',
        'message',
        'service_id',
    ];

    /**
     * Get the service that owns the service request.
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
