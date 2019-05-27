<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Kermeses extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return ([
            'id' => $this->id,
            'name' => $this->name,
            'date' => $this->date,
            'location' => $this->location,
            'total_donation' => $this->total_donation
        ]);
    }
}
