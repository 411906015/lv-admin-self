<?php

namespace App\Http\Controllers\ElectronApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class LoginController extends Controller {


    public function login(Request $request){

        $mobile = $request->post('mobile');
        $passWord = $request->post('password');

        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()){
            return resultErrorApi($validator->errors());
        }

        $userInfo = \DB::table('elenote_users')->where([
            ['mobile',$mobile],
            ['password',md5('elenote'.$passWord)]
        ])->first();
        $userInfo = collect($userInfo)->toArray();
        if (empty($userInfo)){
            return resultErrorApi('登录信息查找失败');
        }
        unset($userInfo['password']);

        $md5Str = createUserMd5ByUid($userInfo['id']);
        setRedisUserInfoByUid($md5Str,$userInfo);
        $userRedis = getRedisUserInfo($md5Str);
        if (empty($userRedis)){
            return resultErrorApi('登录失败');
        }
        $res['user'] = $userInfo;
        $res['elenote_id'] = $md5Str;
        return resultSuccessApi($res,'登录成功');
    }

    public function checkLogin(Request $request){

        $elenote_id = $request->get('elenote_id');

        $userInfo = getRedisUserInfo($elenote_id);

        if (empty($userInfo)){
            return resultErrorApi('登录信息错误');
        }
        return resultSuccessApi($userInfo);
    }
}