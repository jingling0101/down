<?php

namespace App;


class Transform
{
    //
    private static $status;
    private static $error;

    //status no
    public static $s_ok = 200;
    public static $s_not_fond = 404;
    //error no
    public static $er_no = 0;
    public static $net_no_load = 1000;
    public static $not_load = 4444;
    public static $not_net = 4445;
    public static $not_down = 4446;
    public static $not_img = 4447;

    public function __construct()
    {
    }

    /**
     *
     */
    static public function transform($attributes)
    {
        $data['status'] = Transform::getStatusNo();
        $data['error'] = Transform::getErrorNo();
        $data['data'] = $attributes;
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    static public function success($data){
        Transform::setStatusNo(Transform::$s_ok);
        Transform::setErrorNo(Transform::$er_no);
        return Transform::transform($data);
    }

    static public function fail($data,$status,$error){
        Transform::setStatusNo($status);
        Transform::setErrorNo($error);
        return Transform::transform($data);
    }

    static public function getStatusNo()
    {
        return Transform::$status;
    }

    static public function setStatusNo($sta = 200)
    {
        return Transform::$status = $sta;
    }

    static public function getErrorNo()
    {
        return Transform::$error;
    }

    static public function setErrorNo($err = 0)
    {
        return Transform::$error = $err;
    }


}
