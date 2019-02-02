<?php

namespace App\Roles;
/**
 * Created by boly.
 * User: boly
 * Date: 02/02/2019
 * Time: 08:42 م
 */
trait PodcastRole
{

    public function roles()
    {
        return [
            'id' => 'required|string',
            'title' => 'required|string',
            'slug' => 'required|string',
            'description' => 'required|string|min:1|max:5',
            'mp3' => 'url',
            'ogg' => 'url',
        ];
    }

}