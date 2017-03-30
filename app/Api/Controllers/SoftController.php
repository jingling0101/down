<?php
/**
 * Created by PhpStorm.
 * User: lewis
 * Date: 17-3-23
 * Time: 下午12:51
 */

namespace App\Api\Controllers;


use App\Api\Transformers\SoftTransformer;
use App\Resource;
use Illuminate\Http\Request;

class SoftController extends BaseController
{
    public function index()
    {
//        $lesson = json_encode(['a'=>1, 'b'=>2, 'c'=>3]);
//        $lesson = ['a'=>1, 'b'=>2, 'c'=>3];
//        $a = new LessonsTransformer();
//        dd($a->transform($lesson));
//        return json_encode($a);
        $lesson = Resource::all();
        return $this->collection($lesson, new SoftTransformer());
    }

    public function getSoftList(Request $request)
    {

        // category
        $category = 100;
        // 页数
        $pageNumb = $request->get("page", 1);
        // 单页数
        $singe = 10;
        $start = ($pageNumb - 1) * $singe;

        $re = Resource::getResFromPage($start, $singe, $category);
        return $this->collection($re, new SoftTransformer());
    }

}