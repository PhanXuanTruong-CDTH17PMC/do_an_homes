<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiCanHo;

class LoaiCanHoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaicanho= LoaiCanHo::all();
        return view('can-ho.loai-can-ho.danh-sach-loai-can-ho')->with('loaicanho',$loaicanho);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('can-ho.loai-can-ho.them-loai-can-ho');
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
            'ten_loai_can_ho'=>'required'  
        ]);

        $loaicanho = new LoaiCanHo;
        $loaicanho->ten_loai_can_ho =$request ->input('ten_loai_can_ho');
        $loaicanho->save();

        return redirect('/loai-can-ho')->with('success','Add success');
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
        $loaicanho =LoaiCanHo::find($id);
        return view('can-ho.loai-can-ho.sua-loai-can-ho')->with('loaicanho',$loaicanho);
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
            'ten_loai_can_ho'=>'required'  
        ]);

        $loaicanho =LoaiCanHo::find($id);
        $loaicanho->ten_loai_can_ho =$request ->input('ten_loai_can_ho');
        $loaicanho->save();

        return redirect('loai-can-ho')->with('success','Change success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loaicanho =LoaiCanHo::find($id);
        $loaicanho->delete($id);

        return redirect('loai-can-ho')->with('success','delete success');
    }
}
