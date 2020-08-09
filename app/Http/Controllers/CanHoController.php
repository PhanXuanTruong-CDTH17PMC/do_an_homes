<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CanHo;
use App\CuDan;
use App\LoaiCanHo;
use Hash;
use DB;
class CanHoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {                                                                               
        $canho= DB::select('SELECT canho.id as canho_id , Tang, dien_tich, name , password, loaicanho.ten_loai_can_ho as tenloaicanho, cudan.ho_ten_cd as chuho from canho,cudan,loaicanho where canho.loai_can_ho_id=loaicanho.id and canho.chu_ho_id= cudan.id and canho.deleted_at is null');
        return view('can-ho.danh-sach-can-ho')->with('canho',$canho);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loaicanho=LoaiCanHo::all();
        $cudan= CuDan::all();
        return view('can-ho.them-can-ho',compact('loaicanho','cudan'));
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

            'tang'=>'required',
            'dientich'=>'required',
            'tencanho'=>'required',
            'matkhau'=>'required',
            'loaicanho'=>'required',
            'chuho'=>'required'            
        ]);
        $canho = new CanHo;
        $canho->Tang =$request ->input('tang');
        $canho->dien_tich =$request ->input('dientich');
        $canho->name =$request ->input('tencanho');
        $canho->password =hash::make($request ->input('matkhau'));
        $canho->loai_can_ho_id =$request ->input('loaicanho');
        $canho->chu_ho_id =$request ->input('chuho');
        $canho->save();

        return redirect('can-ho')->with('success','Save success');
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
        $canho=CanHo::find($id);
        $loaicanho=LoaiCanHo::all();
        $cudan= CuDan::all();
        return view('can-ho.sua-can-ho',compact('loaicanho','cudan','canho'));
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

            'tang'=>'required',
            'dientich'=>'required',
            'tencanho'=>'required',
            'matkhau'=>'required',
            'loaicanho'=>'required',
            'chuho'=>'required'            
        ]);
        $canho = CanHo::find($id);
        $canho->Tang =$request ->input('tang');
        $canho->dien_tich =$request ->input('dientich');
        $canho->name =$request ->input('tencanho');
        $canho->password =hash::make($request ->input('matkhau'));
        $canho->loai_can_ho_id =$request ->input('loaicanho');
        $canho->chu_ho_id =$request ->input('chuho');
        $canho->save();

        return redirect('can-ho')->with('success','Change success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $canho = CanHo::find($id);
        $canho->delete($id);
        return redirect('can-ho')->with('success','Delete success');
    }
}
