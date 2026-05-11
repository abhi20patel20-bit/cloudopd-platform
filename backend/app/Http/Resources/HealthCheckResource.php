<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HealthCheckResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'status_code' => $this->status_code,
            'response_time_ms' => $this->response_time_ms,
            'is_successful' => $this->is_successful,
            'error_message' => $this->error_message,
            'checked_at' => $this->checked_at,
        ];
    }
}
