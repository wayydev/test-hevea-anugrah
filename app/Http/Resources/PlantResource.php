<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'berat_basah' => $this->berat_basah,
            'drc' => $this->drc,
            'berat_kering' => ($this->berat_basah * $this->drc) / 100,
            'created_at' => $this->create_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
