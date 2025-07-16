<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasUuids;
    
    protected $fillable = [
        'id',
        'name',
        'type',
        'price',
        'duration_days',
        'description',
    ];
}
