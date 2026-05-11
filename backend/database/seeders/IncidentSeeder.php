<?php

namespace Database\Seeders;

use App\Models\Incident;
use App\Models\MonitoredService;
use Illuminate\Database\Seeder;

class IncidentSeeder extends Seeder
{
    public function run(): void
    {
        $service = MonitoredService::first();

        Incident::create([
            'monitored_service_id' => $service->id,
            'title' => 'API Response Delay',
            'description' => 'The API response time exceeded the expected threshold.',
            'severity' => 'medium',
            'status' => 'open',
            'started_at' => now()->subMinutes(15),
            'resolved_at' => null,
        ]);
    }
}
