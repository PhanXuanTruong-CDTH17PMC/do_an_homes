<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiAccount;
use DB;

class LoaiAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaiaccount = DB::select('SELECT * FROM loaiaccount' );
        return view('nhan-vien.loai-account.danh-sach-loai-account')->with('loaiaccount',$loaiaccount);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nhan-vien.loai-account.them-loai-account');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'ten_loai_account'=>'required'  
        ]);

        $loaiaccount = new LoaiAccount;
        $loaiaccount->ten_loai_account =$request ->input('ten_loai_account');
        $loaiaccount->save();

        return redirect('/loai-account')->with('success','Add success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loaiaccount = LoaiAccount::find($id);
        return view('nhan-vien.loai-account.sua-loai-account')->with('loaiaccount',$loaiaccount);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'ten_loai_account'=>'required'  
        ]);

        $loaiaccount = LoaiAccount::find($id);
        $loaiaccount->ten_loai_account =$request ->input('ten_loai_account');
        $loaiaccount->save();

        return redirect('loai-account')->with('success','Change success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loaiaccount = LoaiAccount::find($id);
        $loaiaccount->delete();
        return redirect('loai-account')->with('success','dalete success');

    }
}
