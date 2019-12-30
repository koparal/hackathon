<?php

namespace App\Http\Controllers\Api;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Api\BaseController as BaseController;

class ContactController extends BaseController
{
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validasyon hatası  : ', $validator->errors());
        }

        $data = [
            "name"=> $request->name,
            "surname"=> $request->surname,
            "email"=> $request->email,
            "subject"=> $request->subject,
            "message"=> $request->message,
        ];

        $data = Contact::create($data);

        if($data){
            $data = json_encode($data);
            return $this->sendResponse($data,"Form başarıyla gönderildi. Teşekkürler..");
        }
        else {
            return $this->sendError('Bir sorun oluştu. Lütfen tekrar deneyiniz.');
        }
    }
}
