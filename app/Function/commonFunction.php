<?php
if (! function_exists('resultApi')) {
    function resultApi($code=0, $data=[],$message='') {
        // ...
        if ($code!=0){
            $message = $message?:'ERROR';
        }else{
            $message = $message?:'SUCCESS';
        }
        return response()->json([
            'code'=>$code,
            'msg'=>$message,
            'data'=>$data
        ]);
    }
}

if (! function_exists('resultSuccessApi')) {
    function resultSuccessApi($data=[],$message='SUCCESS') {
        // ...
        return response()->json([
            'code'=>0,
            'msg'=>$message,
            'data'=>$data?:[]
        ]);
    }
}

if (! function_exists('resultErrorApi')) {
    function resultErrorApi($message='ERROR') {
        // ...
        return response()->json([
            'code'=>10000,
            'msg'=>$message,
            'data'=>[],
        ]);
    }
}


//获取 缓存 用户信息
if (! function_exists('getRedisUserInfo')) {
    function getRedisUserInfo($userMd5) {
        // ...
        $userMd5 = 'ELE_NOTE_'.$userMd5;
        $userInfo = \Illuminate\Support\Facades\Redis::connection('user')->get($userMd5);
        if (empty($userInfo)){
            return [];
        }
        return json_decode($userInfo,true);
    }
}

//设置 缓存 用户信息
if (! function_exists('setRedisUserInfoByUid')) {
    function setRedisUserInfoByUid($md5,$userInfo) {
        // ...
        $userPre = 'ELE_NOTE_'.$md5;
        return \Illuminate\Support\Facades\Redis::connection('user')->setex($userPre,86400*7,json_encode($userInfo,JSON_UNESCAPED_UNICODE));
    }
}

//创建 缓存md5
if (! function_exists('createUserMd5ByUid')) {
    function createUserMd5ByUid($uid) {
        // ...
        return md5($uid.'elenote'.rand(1,99999));
    }
}

