<?php

namespace App\Roles;
/**
 * Created by boly.
 * User: boly
 * Date: 02/02/2019
 * Time: 08:42 م
 */
class PodcastRole
{

    public static function roles()
    {
        return [
            'id' => 'required',
            'title' => 'required|string',
            'slug' => 'required|string',
            'description' => 'required|string|min:1',
            'mp3' => 'url',
            'ogg' => 'url',
        ];
    }

}