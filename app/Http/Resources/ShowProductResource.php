<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShowProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'ProjectName' => $this->ProjectName,
            'location' => $this->location,
            'picture' => $this->picture,
            'typeProject' => $this->typeProject,
            'customer' => $this->customer,
            'discription' => $this->discription,
            'StartYearProject' => $this->StartYearProject,
            'Chalanges' => [
                'challenge1' => $this->Chalanges['challenge1'],
                'challenge2' => $this->Chalanges['challenge2'],
            ],
            'Solution' => [
                'solution1' => $this->Solution['solution1'],
                'solution2' => $this->Solution['solution2'],
            ],
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
