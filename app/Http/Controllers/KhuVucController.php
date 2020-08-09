<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhuVuc;

class KhuVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khuvuc=KhuVuc::all();
        return view('phuong-tien.khu-vuc.danh-sach-khu-vuc')->with('khuvuc',$khuvuc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phuong-tien.khu-vuc.them-khu-vuc');
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
            'ten_khu_vuc'=>'required'  
        ]);

        $khuvuc = new KhuVuc;
        $khuvuc->ten_khu_vuc =$request ->input('ten_khu_vuc');
        $khuvuc->save();

        return redirect('khu-vuc')->with('success','Add success');
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
        $khuvuc= KhuVuc::find($id);
        return view('phuong-tien.khu-vuc.sua-khu-vuc')->with('khuvuc',$khuvuc);
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
            'ten_khu_vuc'=>'required'  
        ]);

        $khuvuc = KhuVuc::find($id);
        $khuvuc->ten_khu_vuc =$request ->input('ten_khu_vuc');
        $khuvuc->save();

        return redirect('/khu-vuc')->with('success','Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $khuvuc= KhuVuc::find($id);
        $khuvuc->delete($id);
        return redirect('/khu-vuc')->with('success','Delete success');
    }
}
