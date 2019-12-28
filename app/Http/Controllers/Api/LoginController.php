<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;


class LoginController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $input = $request->all();
        $email = $input['email'];
        $password = $input['password'];

        $userdata = [
            'email' => $email ,
            'password' => $password
        ];

        if (Auth::attempt($userdata)) {
            $user = User::where("email",$email)->first();
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
            return $this->sendError('Girilen bilgiler eşleşmedi. Lütfen tekrar deneyiniz.');
        }
    }
}