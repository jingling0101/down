<?php
/**
 * Created by PhpStorm.
 * User: lewis
 * Date: 17-3-23
 * Time: 下午12:51
 */

namespace App\Api\Controllers;


use App\Api\Transformers\SoftTransformer;
use App\Api\Transformers\SoftDescTransformer;
use App\Resource;
use App\ResourceDesc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SoftController extends BaseController
{
    public function index()
    {
        $lesson = Resource::all();
        return $this->collection($lesson, new SoftTransformer());
    }

    public function getSoftList(Request $request)
    {
        // 单页数
        $single = env('SINGLE_NUM',10);
        // category
        $category = $request->get("cate",0);
        // 页数
        $pageNumb = $request->get("page", 1);
        Log::info('get_soft_list from page num:' . $pageNumb);
        $start = ($pageNumb - 1) * $single;
        $re = Resource::getResFromPage($start, $single, $category);
        return $this->collection($re, new SoftTransformer());
    }

    public function getSoftDesc(Request $request)
    {
        $id = $request->get('id',100000);
        $rs = ResourceDesc::getResDesc($id);
        return $this->item($rs[0], new SoftDescTransformer());
    }

    //
    public function getSoftListByCate(Request $request){

    }

}