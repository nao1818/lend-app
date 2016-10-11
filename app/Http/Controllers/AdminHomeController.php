<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Http\Requests;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $lend;

    public function __construct(Admin $lend)
    {
        $this->middleware('auth:admin');
        $this->lend = $lend;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     /**
    * Display a listing of the resource.
    *
    * @return Response
    */ 

    public function index()
    {
        $lends = $this->lend->all();
        return view('adminAuth.lend',compact('lends'));
    }

    public function create()
    {
        return view('adminAuth.create');
    }

    //ここからadmin編集
    // private $lend;

    // public function __construct(Admin $lend)
    // {
    //     $this->lend = $lend;
    // }

    // /**
    // * Display a listing of the resource.
    // *
    // * @return Response
    // */ 

    // public function index()
    // {
    //     $lends = $this->lend->all();
    //     return view('lend.index',compact('lends'));
    // }
}
