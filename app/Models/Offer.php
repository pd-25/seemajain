<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        "offer_title",
        "offer_description",
        "offer_percentage",
        "course_id",
        "offer_status",
    ];
}
