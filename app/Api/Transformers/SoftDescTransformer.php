<?php

/**
 * Created by PhpStorm.
 * User: lewis
 * Date: 17-3-23
 * Time: 下午12:57
 */
namespace App\Api\Transformers;


use League\Fractal\TransformerAbstract;

class SoftDescTransformer extends TransformerAbstract
{

    public function transform($data)
    {
        return [
            'id' => $data['id'],
            'name' => $data['name'],
            'intro' => $data['intro'],
            'cate' => $data['category'],
            'count' => $data['down_count'],
            'img' => $data['img_url'],
            'down' => $data['down_url'],
            'size' => $data['size'],
            'date' => $data['date'],
            'images' => $data['images'],
            'images_type' => $data['img_screen_type'],
            'desc' => $data['desc'],
            'share' => '/#/soft_info/'.$data['id'],
            'img_dir' => date('Ym',strtotime($data['date'])),
        ];
    }

}