<?php

namespace App\Http\Controllers\Api;

use App\Models\Event;
use App\Http\Controllers\Api\BaseController as BaseController;

class EventController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang = "tr")
    {
        $data = Event::where("lang",$lang)->get();
        if($data){
            $data = json_encode($data);
            return $this->sendResponse($data,"true");
        }
        else {
            return $this->sendError('Veri bulunamadı.');
        }
    }

    public function detail($id,$lang = "tr")
    {
        $data = Event::where("id",$id)->where("lang",$lang)->get();
        if($data){
            $data = json_encode($data);
            return $this->sendResponse($data,"true");
        }
        else {
            return $this->sendError('Veri bulunamadı.');
        }
    }
}