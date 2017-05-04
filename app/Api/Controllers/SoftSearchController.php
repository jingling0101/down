<?php
/**
 * Created by PhpStorm.
 * User: lewis
 * Date: 17-4-22
 * Time: 下午11:28
 */

namespace App\Api\Controllers;


use App\Api\Transformers\SoftTransformer;
use App\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SoftSearchController extends BaseController
{
    public function getSoftFromKeyWords(Request $request)
    {
        // 关键词
        $keyWords = $request->get('key', '');
        // 单页数
        $single = env('SINGLE_NUM',10);
        // category
        $category = $request->get("cate",0);
        // 页数
        $pageNumb = $request->get("page", 1);
        Log::info('get_soft_search from page num:' . $pageNumb);
        $start = ($pageNumb - 1) * $single;
        $words = trim(sprintf("%s",$keyWords));
        if(strpos("'",$words)!==false || strpos('"',$words)!==false) return [];

        $rs = Resource::getResFromKeyWord($start, $single, $words);
        return $this->collection($rs, new SoftTransformer());
    }

}