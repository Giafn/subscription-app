<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class EventQuota extends Model
{
    use HasUuids;

    protected $fillable = [
        'user_id',
        'subscription_id',
        'event_id',
        'event_name',
        'used',
        'used_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
