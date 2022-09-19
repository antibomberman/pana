<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HousingIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'city' => $this->city,
            'country' => $this->city->country,
            'images' => $this->images,
            'in_favorite' => \Auth::user()->favorites()->where('favorites.housing_id',$this->id)->exists(),
//            'review_avg' =>  round($this->reviews()->avg('ball')) ?? 0,
            'reviews_avg_ball' =>  round($this->reviews_avg_ball) ?? 0,
            'distance' => $this->distance($this->lat,$this->lng,43.238949,76.889709)
        ];
    }



    function distance($lat_1, $lon_1, $lat_2, $lon_2): float
    {

        $radius_earth = 6371;

        $lat_1 = deg2rad($lat_1);
        $lon_1 = deg2rad($lon_1);
        $lat_2 = deg2rad($lat_2);
        $lon_2 = deg2rad($lon_2);

       return round(2 * $radius_earth * asin(sqrt(sin(($lat_2 - $lat_1) / 2) ** 2 + cos($lat_1) * cos($lat_2) * sin(($lon_2 - $lon_1) / 2) ** 2)));
    }
}
