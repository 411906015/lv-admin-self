<?php

namespace App\Http\Controllers\ElectronApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller {


    //获得我的所有项目
    public function getMyProjectList(Request $request){


        return response()->json([1,2]);
    }
}