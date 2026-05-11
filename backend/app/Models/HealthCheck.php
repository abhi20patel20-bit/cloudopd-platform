<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HealthCheck extends Model
{
    protected $fillable = [
        'monitored_service_id',
        'status_code',
        'response_time_ms',
        'is_successful',
        'error_message',
        'checked_at',
    ];

    protected $casts = [
        'is_successful' => 'boolean',
        'checked_at' => 'datetime',
    ];

    public function monitoredService(): BelongsTo
    {
        return $this->belongsTo(MonitoredService::class);
    }
}
