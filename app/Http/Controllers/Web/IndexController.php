<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller {


    public function index(Request $request){


        return view('web.index');

    }


    public function oldIndex(){


        return view('web.oldindex');

    }

}