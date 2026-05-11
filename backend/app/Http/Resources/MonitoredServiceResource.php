<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MonitoredServiceResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'organization_id' => $this->organization_id,

            'name' => $this->name,

            'description' => $this->description,

            'url' => $this->url,

            'service_type' => $this->service_type,

            'status' => $this->status,

            'check_interval_seconds' => $this->check_interval_seconds,

            'timeout_seconds' => $this->timeout_seconds,

            'health_checks' => HealthCheckResource::collection(
                $this->whenLoaded('healthChecks')
            ),

            'incidents' => IncidentResource::collection(
                $this->whenLoaded('incidents')
            ),

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
