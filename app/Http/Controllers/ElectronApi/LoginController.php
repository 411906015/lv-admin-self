<?php

namespace App\Http\Controllers\ElectronApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller {


    public function login(Request $request){

        header('Content-Type:Access-Control-Allow-Origin');
        $asd = [
          'code'=>1,
          'data'=>['token'=>123456]
        ];

        return $asd;


    }
}