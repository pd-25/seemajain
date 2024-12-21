<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Define the fillable fields (or you can use guarded instead)
    protected $fillable = [
        'title',
        'description',
        'icon',
        'background_image',
    ];

    /**
     * Get the service requests for the service.
     */
    public function serviceRequests()
    {
        return $this->hasMany(ServiceRequest::class);
    }
}
