<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $table = 'oi_resources';
    //
    public function getRes()
    {
        $list = Resource::all();
        return $list;
    }

    /**
     * 竞价排名
     * @param $page
     * @param $single
     * @param $category
     * @param int $status
     * @return mixed
     */
    static public function getResFromPage($page,$single, $category = 0, $status = 1)
    {
        if($category==0){
            return Resource::where('status',$status)
                ->orderBy('sort','desc')
                ->orderBy('id','desc')
                ->offset($page)
                ->limit($single)
                ->get();
        } else {
            return Resource::where('category',$category)
                ->where('status',$status)
                ->orderBy('sort','desc')
                ->orderBy('id','desc')
                ->offset($page)
                ->limit($single)
                ->get();
        }
    }


    /**
     * @param String $key
     * @param int $category
     * @return mixed
     */
    static public function getResFromKeyWord(String $key, $category = 0)
    {
        if ($category == 0) {
            return Resource::where('key_words', 'like', '%' . $key . '%')
                ->get();
        } else {
            return Resource::where('category',$category)
                ->where('key_words', 'like', '%' . $key . '%')
                ->get();
        }

    }
}
