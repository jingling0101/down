<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResourceDesc extends Model
{
    protected $table = 'oi_resources_desc';
    //
    static public function getResDesc($id)
    {
        $res =ResourceDesc::select('*')
            ->leftJoin('oi_resources', 'oi_resources.id', '=', 'oi_resources_desc.res_id')
            ->where('oi_resources.id',$id)
            ->get();
        return $res;
    }

}
