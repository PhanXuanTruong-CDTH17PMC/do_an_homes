<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DichVu;
use DB;

class DichVuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dichvu=DichVu::all();
        return view('dich-vu.danh-sach-dich-vu')->with('dichvu',$dichvu);
    }
    public function create()
    {
        return view('dich-vu.them-moi-dich-vu');
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
            'ten_dich_vu'=>'required',
            'don_vi'=>'required',
            'phi_dv'=>'required'  
        ]);

        $dichvu = new DichVu;
        $dichvu->ten_dich_vu =$request ->input('ten_dich_vu');
        $dichvu->don_vi=$request->input('don_vi');
        $dichvu->phi_dv=$request->input('phi_dv');
        $dichvu->save();

        return redirect('dich-vu')->with('success','Add success');
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
        $dichvu =DichVu::find($id);
        return view('dich-vu.sua-dich-vu')->with('dichvu',$dichvu);
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
            'ten_dich_vu'=>'required',
            'don_vi'=>'required',
            'phi_dv'=>'required'  
        ]);

        $dichvu = DichVu::find($id);
        $dichvu->ten_dich_vu =$request ->input('ten_dich_vu');
        $dichvu->don_vi=$request->input('don_vi');
        $dichvu->phi_dv=$request->input('phi_dv');
        $dichvu->save();

        return redirect('dich-vu')->with('success','Change success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dichvu = DichVu::find($id);
        $dichvu->delete();

        return redirect('dich-vu')->with('success','Delete success');
    }
}