<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MonitoredService;

class MonitoredServiceController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => MonitoredService::with([
                'organization',
                'healthChecks',
                'incidents',
            ])->get(),
        ]);
    }

    public function show(MonitoredService $monitoredService)
    {
        return response()->json([
            'data' => $monitoredService->load([
                'organization',
                'healthChecks',
                'incidents',
            ]),
        ]);
    }
}
