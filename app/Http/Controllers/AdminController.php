<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bucket = 'softdown';
//        if(Auth::user()->role !== 9 ){
//            dd('......');
//        }
        $cos = app('q-cloud-cos');
        return $cos::stat($bucket, '/');

        return view('admin.index');
    }
}
