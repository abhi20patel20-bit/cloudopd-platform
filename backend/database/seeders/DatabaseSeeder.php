<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Organization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $organization = Organization::firstOrCreate(
            ['slug' => 'test-org-123'],
            [
                'name' => 'Test Organization',
                'status' => 'active',
            ]
        );

        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'organization_id' => $organization->id,
                'name' => 'Admin User',
                'password' => Hash::make('password123'),
            ]
        );

        $this->call([
            MonitoredServiceSeeder::class,
            HealthCheckSeeder::class,
            IncidentSeeder::class,
        ]);
    }
}
