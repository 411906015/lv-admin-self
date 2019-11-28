<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

class IndexController extends WebBaseController {


    public function index(Request $request){


        return view('web.index');

    }


    public function oldIndex(){


        return view('web.oldindex');

    }

}