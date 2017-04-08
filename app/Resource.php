<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Resource extends Model
{
    protected $table = 'oi_resources';
    //
    public function getRes()
    {
        $list = Resource::all();
        return $list;
    }

    static public function getResFromPage($page,$single, $category, $status = 1)
    {
        return Resource::where('category',$category)
            ->where('status',$status)
            ->orderBy('id','desc')
            ->offset($page)
            ->limit($single)
            ->get();
    }

    /**
     * @param $page
     * @param $category
     * @param int $status
     * @return mixed
     */
    public function getResFromNomPage($page, $category,$id =
    100060, $status = 1)
    {
        return Resource::where('category',$category)
            ->where('status',$status)
            ->where('id','<',$id)
            ->orderBy('sort','desc')
            ->where('page',$page)
            ->get()
            ->limit(15);
    }
}
