<?php

namespace App\Http\Controllers\Api;

use App\Models\CompanyRate;
use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Http\Request;
use Validator;

class CompanyRateController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function vote(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_id' => 'required',
            'user_id' => 'required',
            'transportation_rate' => 'required',
            'eat_rate' => 'required',
            'management_rate' => 'required',
            'general_rate' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validasyon hatası  : ', $validator->errors());
        }

        $data = [
            "company_id"=> ($request->company_id) ? $request->company_id : 0,
            "user_id"=> ($request->user_id) ? $request->user_id : 0,
            "transportation_rate"=> ($request->transportation_rate) ? $request->transportation_rate : 0,
            "eat_rate"=> ($request->eat_rate) ? $request->eat_rate : 0,
            "management_rate"=> ($request->management_rate) ? $request->management_rate : 0,
            "general_rate"=> ($request->general_rate) ? $request->general_rate : 0,
        ];

        $data = CompanyRate::create($data);
        if($data){
            $data = json_encode($data);
            return $this->sendResponse($data,"Puan başarıyla verildi. Teşekkürler..");
        }
        else {
            return $this->sendError('Puan verilirken bir sorun oluştu. Lütfen tekrar deneyiniz.');
        }
    }
}