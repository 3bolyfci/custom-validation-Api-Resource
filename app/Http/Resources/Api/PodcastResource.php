<?php

namespace App\Http\Resources\Api;


use App\Traits\ApiResponseValidationTrait;
use App\Model\PodCast;

use Illuminate\Http\Resources\Json\JsonResource;


class PodcastResource extends JsonResource
{

    use ApiResponseValidationTrait;

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
        if ($this->validateResponse($response, PodCast::$rule)) {
            return $this->validateResponse($response, PodCast::$rule);
        }
        return $response;

    }

}
