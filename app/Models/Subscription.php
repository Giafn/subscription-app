<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasUuids;

    protected $fillable = [
        'id',
        'user_id',
        'plan_id',
        'status',
        'start_date',
        'end_date',
        'used',
        'invoice_id',
        'payment_status',
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
