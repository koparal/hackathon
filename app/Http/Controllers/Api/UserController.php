<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\User;
use Validator;


class UserController extends BaseController
{
    public function all()
    {
        $data = User::where("role_id","!=",0)->all();

        if($data){
            $data = json_encode($data);

            return $this->sendResponse($data,"true");
        }
        else {
            return $this->sendError('Veri bulunamadı.');
        }
    }

    public function companies()
    {
        $data = User::where("role_id",self::COMPANY_ROLE_ID)->get();
        if($data){
            $data = json_encode($data);
            return $this->sendResponse($data,"true");
        }
        else {
            return $this->sendError('Veri bulunamadı.');
        }
    }

    public function userDetail($id)
    {
        $user = User::where("id",$id)->first();

        if($user){
            $data = [
                "username"=>$user->name,
                "email"=>$user->email
            ];
            if ($user->extras){
                foreach ($user->extras as $extra){
                    $data += [$extra->key=>$extra->value];
                }
            }
            $data = json_encode($data);

            return $this->sendResponse($data,"true");
        }
        else {
            return $this->sendError('Veri bulunamadı.');
        }
    }
}