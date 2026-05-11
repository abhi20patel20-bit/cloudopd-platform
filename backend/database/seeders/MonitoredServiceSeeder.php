<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\MonitoredService;
use Illuminate\Database\Seeder;

class MonitoredServiceSeeder extends Seeder
{
    public function run(): void
    {
        $organization = Organization::first();

        MonitoredService::firstOrCreate(
            [
                'url' => 'https://example.com/api/health',
            ],
            [
                'organization_id' => $organization->id,
                'name' => 'Main API',
                'description' => 'Primary Laravel API health endpoint',
                'service_type' => 'http',
                'status' => 'operational',
                'check_interval_seconds' => 60,
                'timeout_seconds' => 10,
            ]
        );
    }
}
