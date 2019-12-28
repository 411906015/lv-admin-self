<?php

namespace App\Http\Controllers\ElectronApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller {


    public function login(Request $request){

        $asd = [
          'code'=>20000,
          'data'=>['token'=>3]
        ];

        return $asd;


    }
}