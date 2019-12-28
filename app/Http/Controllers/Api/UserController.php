<?php
namespace App\Http\Controllers\Api;

use App\Models\UserExtra;
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

    public function userUpdate(Request $request)
    {
        $all_data = request()->except('name','user_id');
        $user_id = $request->user_id;

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validasyon hatası  : ', $validator->errors());
        }


        if (isset($request->name)){
            $data = [
                "name"=> $request->name,
            ];
            User::where("id",$request->user_id)->update($data);
        }

        if (count($all_data)>0){
            foreach ($all_data as $key=>$value){
                if (UserExtra::where("user_id",$user_id)->where("key",$key)->first()){
                    UserExtra::where("user_id",$user_id)->where("key",$key)->update(["value"=>$value]);
                }else{
                    UserExtra::create(["user_id"=>$user_id,"key"=>$key,"value"=>$value]);
                }
            }
        }
        return $this->sendResponse("true","Kullanıcı başarıyla güncellendi");
    }
}