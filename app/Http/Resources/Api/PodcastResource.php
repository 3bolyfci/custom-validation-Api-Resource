<?php

namespace App\Http\Resources\Api;

use App\Traits\ApiResponseValidationTrait;


use Illuminate\Http\Resources\Json\JsonResource;
use App\Roles\PodcastRole;
use Illuminate\Support\Facades\Log;


class PodcastResource extends JsonResource
{
    use ApiResponseValidationTrait, PodcastRole;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {

        $response = [
            'id' => $this->id,
            'slug' => $this->slug,
            'title' => $this->title,
            'description' => $this->description,
            'mp3' => $this->file_mp3,
            'ogg' => $this->file_ogg,

        ];
        return $this->validateResponse($response, $this->roles());

    }

}
