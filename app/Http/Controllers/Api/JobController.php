<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\Job;
use App\Models\JobUser;
use App\User;
use Illuminate\Http\Request;
use Validator;

class JobController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang = "tr")
    {
        $call = [];
        $data = Job::whereHas("details",function($q)use($lang){
            $q->where("lang",$lang);
        })->get();

        if($data){
            foreach($data as $d){
                $call = [
                    "id"=>$d->id,
                    "company"=>$d->company->name,
                    "title"=>$d->detail->title,
                    "detail"=>$d->detail->detail,
                    "number_of_people"=>$d->detail->number_of_people,
                    "city"=>$d->detail->findCity->name,
                ];
            }
        }

        if($call){
            $data = json_encode($call);
            return $this->sendResponse($data,"true");
        }
        else {
            return $this->sendError('Veri bulunamadı.');
        }
    }

    public function jobDetail($id,$lang = "tr")
    {
        $data = Job::where("id",$id)->whereHas("details",function($q)use($lang){
            $q->where("lang",$lang);
        })->first();

        if($data){
            $data = json_encode($data);
            return $this->sendResponse($data,"true");
        }
        else {
            return $this->sendError('Veri bulunamadı.');
        }
    }

    public function jobApply(Request $request)
    {
        /*
         * Kural 1 cv kesinlikle olmalı
         * Bir kez başvurabilir
         */

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'job_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());
        }

        $user = User::find($request->user_id);
        if (!$user->cv){
            return "cv yok";
        }

        $data = [
            "job_id"=> $request->job_id,
            "user_id"=> $request->user_id,
        ];

        $isThere = JobUser::where("job_id",$request->job_id)->where("user_id",$request->user_id)->first();
        if (!$isThere){
            $data = JobUser::create($data);
        }else{
            return $this->sendResponse($data,"İş başvurusu zaten yapılmış.");
        }

        if($data){
            $data = json_encode($data);
            return $this->sendResponse($data,"İş başvurusu başarıyla eklendi. Teşekkürler..");
        }
        else {
            return $this->sendError('İşlem sırasında bir sorun oluştu. Lütfen tekrar deneyiniz.');
        }
    }
}