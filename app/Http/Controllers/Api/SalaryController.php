<?php

namespace App\Http\Controllers\Api;

use App\Models\SalaryRate;
use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Http\Request;
use Validator;

class SalaryController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_id' => 'required',
            'user_id' => 'required',
            'salary' => 'required',
            'department_id' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validasyon hatası  : ', $validator->errors());
        }

        $data = [
            "company_id"=> ($request->company_id) ? $request->company_id : 0,
            "user_id"=> ($request->user_id) ? $request->user_id : 0,
            "salary"=> ($request->salary) ? $request->salary : 0,
            "department_id"=> ($request->department_id) ? $request->department_id : 0,
        ];

        $data = SalaryRate::create($data);
        if($data){
            $data = json_encode($data);
            return $this->sendResponse($data,"Maaş bilgisi başarıyla eklendi. Teşekkürler..");
        }
        else {
            return $this->sendError('İşlem sırasında bir sorun oluştu. Lütfen tekrar deneyiniz.');
        }
    }
}