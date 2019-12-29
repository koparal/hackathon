<?php

namespace App\Http\Controllers\Api;

use App\Models\Cv;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use Validator;

class CvController extends BaseController
{
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validasyon hatası  : ', $validator->errors());
        }

        $data = [
            "user_id"=> $request->user_id,
            "type"=> ($request->type) ? $request->type  : 0,
            "name"=> $request->name,
            "surname"=> $request->surname,
            "email"=> $request->email,
            "phone"=> $request->phone,
            "gender"=> $request->gender,
            "addess"=> $request->addess,
            "military_status"=> $request->military_status,
        ];

        $data = Cv::create($data);
        if($data){

            // TODO extra bilgiler kaydedilecek

            $data = json_encode($data);
            return $this->sendResponse($data,"Cv başarıyla eklendi. Teşekkürler..");
        }
        else {
            return $this->sendError('İşlem sırasında bir sorun oluştu. Lütfen tekrar deneyiniz.');
        }
    }
}