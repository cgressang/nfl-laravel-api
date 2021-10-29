<?php declare(strict_types=1);

namespace App\Http\Resources;

use App\Http\Resources\ConferenceTeam;
use Illuminate\Http\Resources\Json\JsonResource;

class Conference extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array
    {
        $arr = [
            'id' => $this->id,
            'name' => $this->name,
            'abbr' => $this->name_abbr,
        ];

        if (isset($this->team_list)) {
            $arr['team_list'] = ConferenceTeam::collection($this->team_list);
        }

        if (isset($this->division_list)) {
            $arr['division_list'] = ConferenceDivision::collection($this->division_list);
        }

        return $arr;
    }
}
