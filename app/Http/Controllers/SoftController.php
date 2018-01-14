<?php

namespace App\Http\Controllers;

use App\Resource;
use App\Transform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class SoftController extends Controller
{

    public function index() {
        return view('index');
    }

    //
    public function getSoftList(Request $request)
    {
        // 单页数
        $single = env('SINGLE_NUM',10);
        // category
        $category = 100;
        // 页数
        $pageNumb = $request->get("page",1);

        $start = ($pageNumb - 1) * $single;

        $re = Resource::getResFromPage($start,$single,$category);
        //return $re;
        return Transform::success($re);
    }

    public function createSoft(){
        $bucket = 'softdown';
    }

}
