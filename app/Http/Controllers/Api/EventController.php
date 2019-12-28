<?php

namespace App\Http\Controllers\Api;

use App\Models\Event;
use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Http\Request;
use Validator;

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

    public function join(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'event_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validasyon hatası  : ', $validator->errors());
        }

        $data = [
            "event_id"=> $request->company_id,
            "user_id"=> $request->user_id,
        ];

        $data = SalaryRate::create($data);
        if($data){
            $data = json_encode($data);
            return $this->sendResponse($data,"Etkinlik kaydınız başarıyla eklendi. Teşekkürler..");
        }
        else {
            return $this->sendError('İşlem sırasında bir sorun oluştu. Lütfen tekrar deneyiniz.');
        }
    }
}