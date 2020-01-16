<?php

namespace App\Http\Controllers\ElectronApi;

use App\Http\Controllers\Controller;
use App\Models\elenoteUsers;
use Illuminate\Http\Request;
use Validator;

class UserDataController extends Controller {

    private $userData=[];

    public function __construct(Request $request){
        $elenoteId = $request->get('elenote_id');
        $this->userData = getRedisUserInfo($elenoteId);
        if (empty($this->userData)){
            return resultApi(20001,[],'登录错误');
        }
    }

    public function editPassWord(Request $request){
        $all = $request->post();
        $pass = $all['pass']??'';
        $checkPass = $all['checkPass']??'';

        $validator = Validator::make($request->all(), [
            'pass' => 'required|min:6',
            'checkPass' => 'required|min:6'
        ]);

        if ($validator->fails()){
            return resultErrorApi($validator->errors());
        }
        if ($pass!=$checkPass){
            return resultErrorApi('密码与确认密码不一致');
        }

//        $a = elenoteUsers::find(1);
//dd($a->toArray());
        return resultSuccessApi($request->all());
    }

}