<?php

namespace App\Http\Middleware;

use Closure;

class CheckElenoteId
{
    /**
     * 处理传入的请求
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $parms = $request->all();
        if (!isset($parms['elenote_id'])) {
            return resultApi(10001,[],'elenote_id 缺失');
        }else{
            if (strlen($parms['elenote_id'])!=32){
                return resultApi(10002,[],'elenote_id 错误');
            }
            if (empty(getRedisUserInfo($parms['elenote_id']))){
                return resultApi(20001,[],'登录错误');
            }
        }

        return $next($request);
    }
}
