<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoPhan;

class BoPhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bophan = BoPhan::all();
        return view('nhan-vien.bo-phan.danh-sach-bo-phan')-> with('bophan',$bophan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nhan-vien.bo-phan.them-bo-phan');
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
            'ten_bo_phan'=>'required'  
        ]);

        $bophan = new BoPhan;
        $bophan->ten_bo_phan =$request ->input('ten_bo_phan');
        $bophan->save();

        return redirect('/danh-sach-bo-phan')->with('success','Add success');
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
        $bophan =BoPhan::find($id);
        return view('nhan-vien.bo-phan.sua-bo-phan')->with('bophan',$bophan);
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
            'ten_bo_phan'=>'required'  
        ]);

        $bophan = BoPhan::find($id);
        $bophan->ten_bo_phan =$request ->input('ten_bo_phan');
        $bophan->save();

        return redirect('/danh-sach-bo-phan')->with('success','Change success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bophan = BoPhan::find($id);
        $bophan->delete();

        return redirect('/danh-sach-bo-phan')->with('success','Delete success');
    }
}
