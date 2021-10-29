<?php declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Team extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'location' => $this->location,
            'name' => $this->name,
            'abbr' => $this->name_abbr,
            'established' => $this->established,
            'url' => $this->site_url,
            'stadium' => $this->stadium->name,
            'division' => $this->division->name,
            'conference' => $this->conference->name_abbr,
            'owners' => Owner::collection($this->owners),
            'staff' => Staff::collection($this->staff),
            'coaches' => Coach::collection($this->coaches),
        ];
    }
}
