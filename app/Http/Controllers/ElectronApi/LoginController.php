<?php

namespace App\Http\Controllers\ElectronApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller {


    public function login(Request $request){

        dd($request->all());


    }

    public function checkLogin(Request $request){

        return response()->json([
            'code'=>20000,
            'data'=>[
                'data1'=>1,
                'data2'=>2,
            ]
        ]);


    }
}