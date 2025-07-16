<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class EventInstance extends Model
{
    use HasUuids;
    
    protected $fillable = [
        'id',
        'user_id',
        'subscription_id',
        'event_token',
        'domain',
        'status',
        'deployed_at',
        'notes',
    ];
}
