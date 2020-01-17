<?php

namespace App\Http\Controllers\ElectronApi;

use App\Http\Controllers\Controller;
use App\Models\elenoteUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Validator;

class UserDataController extends Controller {

    private $userData=[];

    public function __construct(Request $request){
        $elenoteId = $request->get('elenote_id');
        $this->userData = getRedisUserInfo($elenoteId);
        if (empty($this->userData) || !$this->userData['id']){
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
            return resultErrorApi($validator->errors()->toJson());
        }
        if ($pass!=$checkPass){
            return resultErrorApi('密码与确认密码不一致');
        }

        $userData = elenoteUsers::find($this->userData['id']);
        $uid = collect($userData)->get('id');
        if (!$uid){
            return resultErrorApi('找不到当前用户');
        }
        $userData->password = createElenotePassword($pass);
        if (!$userData->save()){
            return resultErrorApi('修改密码失败');
        }
        return resultSuccessApi();
    }

    public function editBase(Request $request){
        $all = $request->post();
        $baseData['nick_name'] = trim($all['name']??'');
        $baseData['real_name'] = trim($all['realName']??'');
        $baseData['email'] = trim($all['email']??'');
        $baseData['remark'] = trim($all['remark']??'');

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'realName' => 'required',
            'email' => 'required|email'
        ],['name.required'=>'昵称必填']);

        if ($validator->fails()){
            return resultErrorApi($validator->errors()->toJson(JSON_UNESCAPED_UNICODE));
        }

        $userData = elenoteUsers::find($this->userData['id']);
        $uid = collect($userData)->get('id');
        if (!$uid){
            return resultErrorApi('找不到当前用户');
        }
        $res = elenoteUsers::where('id',$uid)->update($baseData);
        if (!$res){
            return resultErrorApi('修改基本信息失败');
        }
        $this->userData['nick_name'] = $baseData['nick_name'];
        $this->userData['real_name'] = $baseData['real_name'];
        $this->userData['email'] = $baseData['email'];
        $this->userData['remark'] = $baseData['remark'];
        $ttl = Redis::connection('user')->ttl('ELE_NOTE_'.$this->userData['cacheKey']);
        Redis::connection('user')->setex('ELE_NOTE_'.$this->userData['cacheKey'],$ttl,json_encode($this->userData,JSON_UNESCAPED_UNICODE));
        return resultSuccessApi();
    }

}