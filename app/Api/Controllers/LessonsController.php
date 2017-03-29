<?php
/**
 * Created by PhpStorm.
 * User: lewis
 * Date: 17-3-23
 * Time: 下午12:51
 */

namespace App\Api\Controllers;


use App\Api\Transformers\LessonsTransformer;
use App\Post;

class LessonsController extends BaseController
{
    public function index()
    {
        $lesson = json_encode(['a'=>1, 'b'=>2, 'c'=>3]);
        $lesson = ['a'=>1, 'b'=>2, 'c'=>3];
        $a = new LessonsTransformer();
        dd($a->transform($lesson));
        return json_encode($a);
        $lesson = Post::all();
        return $this->collection($lesson, new LessonsTransformer());
    }

}