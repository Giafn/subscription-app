<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class EventLog extends Model
{
    use HasUuids;
    protected $fillable = [
        'id',
        'event_token',
        'level',
        'message',
    ];
}
