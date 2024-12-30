<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class indexProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        //                dd($this->ProjectName);
        return[
            'id' => $this->id,
            'project_name' => $this->ProjectName,
            'location' => $this->location,
            'picture' => $this->picture,
            'type' => $this->typeProject,
            'customer' => $this->customer,
            'description' => $this->discription,
            'start_year' => $this->StartYearProject,
            'challenges' =>$this->Chalanges,
            'solution' => $this->Solution ,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
