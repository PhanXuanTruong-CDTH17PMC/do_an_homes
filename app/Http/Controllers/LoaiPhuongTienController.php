<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiPhuongTien;
use App\DichVu;
use DB;

class LoaiPhuongTienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaiphuongtien=LoaiPhuongTien::all();
        
        
    // dd($loaiphuongtien);
        // $loaiphuongtien= DB::select('SELECT * from loaiphuongtien, dichvu where dichvu.id = dich_vu_id');
        return view('phuong-tien.loai-phuong-tien.danh-sach-loai-phuong-tien')->with('loaiphuongtien',$loaiphuongtien);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $dichvu=DichVu::all();
        return view('phuong-tien.loai-phuong-tien.them-loai-phuong-tien',compact('dichvu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     $this->validate($request,[
    //     'ten_loai_phuong_tien'=>'required',
    //     'dichvu'=>'required'
    // ]);

    $loaiphuongtien = new LoaiPhuongTien;
    $loaiphuongtien->ten_loai_phuong_tien =$request ->input('ten_loai_phuong_tien');
    $loaiphuongtien->dich_vu_id =$request ->input('dich_vu');
    $loaiphuongtien->save();

        return redirect('loai-phuong-tien')->with('success','Add success');
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
        $loaiphuongtien=LoaiPhuongTien::find($id);
        $dichvu=DichVu::all();
        return view('phuong-tien.loai-phuong-tien.sua-loai-phuong-tien')->with('loaiphuongtien','dichvu');
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
            'ten_loai_phuong_tien'=>'required',
            'dich_vu_id'=>'required'
        ]);

        $loaiphuongtien=LoaiPhuongTien::find($id);
        $loaiphuongtien->ten_loai_phuong_tien =$request ->input('ten_loai_phuong_tien');
        $loaiphuongtien->dich_vu_id =$request ->input('dich_vu_id');
        $loaiphuongtien->save();
        return redirect('loai-phuong-tien')->with('success','Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loaiphuongtien=LoaiPhuongTien::find($id);
        $loaiphuongtien->delete($id);
         return redirect('loai-phuong-tien')->with('success','Delete success');
    }
}
