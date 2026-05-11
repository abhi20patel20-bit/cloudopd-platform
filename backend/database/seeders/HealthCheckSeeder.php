<?php

namespace Database\Seeders;

use App\Models\HealthCheck;
use App\Models\MonitoredService;
use Illuminate\Database\Seeder;

class HealthCheckSeeder extends Seeder
{
    public function run(): void
    {
        $service = MonitoredService::first();

        HealthCheck::create([
            'monitored_service_id' => $service->id,
            'status_code' => 200,
            'response_time_ms' => 180,
            'is_successful' => true,
            'error_message' => null,
            'checked_at' => now(),
        ]);
    }
}
