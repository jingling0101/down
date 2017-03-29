<?php

/**
 * Created by PhpStorm.
 * User: lewis
 * Date: 17-3-23
 * Time: 下午12:57
 */
namespace App\Api\Transformers;


use League\Fractal\TransformerAbstract;

class LessonsTransformer extends TransformerAbstract
{

    public function transform($lesson)
    {
        return [
            'a' => $lesson['a']
        ];

    }

}