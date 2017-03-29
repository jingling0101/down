<?php

namespace App\Http\Controllers;

use App\Resource;
use App\Transform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use YueCode\Cos\QCloudCos;


class SoftController extends Controller
{
    //
    public function getSoftList(Request $request)
    {
//        Log::info(print_r($request->all(), true));
//        Log::info($request->get("page"));
        // category
        $category = 100;
        // 页数
        $pageNumb = $request->get("page",1);
        // 单页数
        $singe = 2;
        $start = ($pageNumb - 1) * $singe;

        $re = Resource::getResFromPage($start,$singe,$category);
        //return $re;
        return Transform::success($re);

//        $softList = Resource::all();
//        return Transform::fail($softList,Transform::$net_no_load,Transform::$not_down);
//        return Transform::success($softList);
    }

    public function createSoft(){
        $bucket = 'softdown';
        return QCloudCos::stat($bucket,'test/11.txt');
    }

}
