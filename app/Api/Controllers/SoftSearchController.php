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

class SoftSearchController extends BaseController
{
    public function getSoftFromKeyWords(Request $request)
    {
        // return $request;
        $keyWords = $request->get('key', '');
        $words = trim(sprintf("%s",$keyWords));
        if(strpos("'",$words)!==false || strpos('"',$words)!==false) return [];
        $rs = Resource::getResFromKeyWord($words);
        return $this->collection($rs, new SoftTransformer());
    }

}