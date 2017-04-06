<?php

/**
 * Created by PhpStorm.
 * User: lewis
 * Date: 17-3-23
 * Time: 下午12:57
 */
namespace App\Api\Transformers;


use League\Fractal\TransformerAbstract;

class SoftTransformer extends TransformerAbstract
{

    public function transform($lesson)
    {
        return [
            'id' => $lesson['id'],
            'name' => $lesson['name'],
            'intro' => $lesson['intro'],
            'cate' => $lesson['category'],
            'count' => $lesson['down_count'],
            'img' => $lesson['img_url'],
            'down' => $lesson['down_url'],
            'size' => $lesson['size'],
            'date' => $lesson['date'],
        ];
    }

}