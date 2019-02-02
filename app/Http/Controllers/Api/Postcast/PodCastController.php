<?php

namespace App\Http\Controllers\Api\Postcast;

use App\Http\Resources\Api\PodcastResource;
use App\Model\PodCast;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PodCastController extends Controller
{
    public  function index(){
        $podcasts =PodCast::paginate(5);
        return  PodcastResource::collection($podcasts);
    }
    public function show(PodCast $podCast){
       return  new PodcastResource($podCast);
    }
}
