<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThongBao;
use App\CanHo;
use DB;
class ThongBaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thongbao= thongbao::all();
        return view('thong-bao.danh-sach-thong-bao')->with('thongbao',$thongbao);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $canho=CanHo::all();
        return view('thong-bao.them-thong-bao')->with('canho',$canho);
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
            'noi_dung_tb'=>'required',
            'can_ho_id'=>'required'
        ]);

        $thongbao = new ThongBao;
        $thongbao->noi_dung_tb =$request ->input('noi_dung_tb');
        $thongbao->tinh_trang =0;
        $thongbao->nhan_vien_id =1;
        $thongbao->can_ho_id =$request ->input('can_ho_id');
        $thongbao->save();

        return redirect('danh-sach-thong-bao')->with('success','Add success');
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
        $canho=CanHo::all();
        $thongbao=ThongBao::find($id);
        return view('thong-bao.sua-thong-bao',compact('canho','thongbao'));
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
            'noi_dung_tb'=>'required',
            'can_ho_id'=>'required'
        ]);

        $thongbao = ThongBao::find($id);
        $thongbao->noi_dung_tb =$request ->input('noi_dung_tb');
        $thongbao->tinh_trang =0;
        $thongbao->nhan_vien_id =1;
        $thongbao->can_ho_id =$request ->input('can_ho_id');
        $thongbao->save();

        return redirect('danh-sach-thong-bao')->with('success','Change success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thongbao = ThongBao::find($id);
        $thongbao->delete($id);
        return redirect('danh-sach-thong-bao')->with('success','Delete success');
    }
}
