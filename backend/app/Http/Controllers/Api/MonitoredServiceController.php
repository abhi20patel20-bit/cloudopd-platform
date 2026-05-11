<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MonitoredServiceResource;
use App\Models\MonitoredService;

class MonitoredServiceController extends Controller
{
    public function index()
    {
        $services = MonitoredService::with([
            'organization',
            'healthChecks',
            'incidents',
        ])->get();

        return MonitoredServiceResource::collection($services);
    }

    public function show(MonitoredService $monitoredService)
    {
        $monitoredService->load([
            'organization',
            'healthChecks',
            'incidents',
        ]);

        return new MonitoredServiceResource($monitoredService);
    }
}
