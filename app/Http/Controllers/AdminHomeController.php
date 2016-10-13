<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        // $this->lend = $lend;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.home');
    }

    // *
    // * Display a listing of the resource.
    // *
    // * @return Response


     

    // public function index()
    // {
    //     $lends = $this->lend->all();
    //     return view('adminAuth.lend',compact('lends'));
    // }



    // public function create()
    // {
    //     return view('adminAuth.create');
    // }


    // /**
    //  * 新しいブログポストの保存
    //  *
    //  * @param  Request  $request
    //  * @return Response
    //  */

    // public function store(Request $request)
    // {
    //     $input = $request->all();
    //     $this->lend->fill($input);
    //     $this->lend->save();
    //     return redirect()->to('adminAuth.lend');
    // }


    // public function edit($id)
    // {
    //     $lend = $this->lend->find($id);
    //     return view('edit')->with(compact('lend'));
    // }


    // public function update(Request $request, $id)
    // {
    //     $input = $request->all();
    //     $this->lend->where('id',$id)->update(['title' => $input['title']]);
    //     return redirect()->to('lend');
    // }



    // public function destroy($id)
    // {
    //     $data = $this->lend->find($id);
    //     $data->delete();

    //     return redirect()->to('adminAuth.lend');
    // }

    
}
