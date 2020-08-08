<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoPhan;
use App\NhanVien;
use App\LoaiAccount;
use Hash;
use DB;

class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index() {
         $nhanvien = DB::select('SELECT nhanvien.id as id_nhan_vien,`ho_ten_nv`,`CMND`,`email`,`SDT`,`ngay_sinh`,`username`,`password`,loaiaccount.ten_loai_account as loai_account,bophan.ten_bo_phan as "tenbophan" FROM `nhanvien`,`bophan`,loaiaccount WHERE nhanvien.bo_phan_id=bophan.id and nhanvien.loai_account_id=loaiaccount.id and nhanvien.deleted_at is null ORDER BY id_nhan_vien');
        return view('nhan-vien.danh-sach-nhan-vien')-> with('nhanvien',$nhanvien); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loaitaikhoan = DB::select('SELECT * from loaiaccount');
        $bophan = BoPhan::all();
        return view('nhan-vien.them-moi-nv',compact('bophan','loaitaikhoan'));
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
            'ten_nhan_vien'=>'required',
            'CMND'=>'required',
            'SDT'=>'required',
            'email'=>'required',
            'ngaysinh'=>'required',
            'username'=>'required',
            'matkhau'=>'required',
            'loaitaikhoan'=>'required',
            'bophan'  =>'required'
        ]);
        $nhanvien = new NhanVien;
        $nhanvien->ho_ten_nv =$request ->input('ten_nhan_vien');
        $nhanvien->CMND =$request ->input('CMND');
        $nhanvien->SDT =$request ->input('SDT');
        $nhanvien->email =$request ->input('email');
        $nhanvien->ngay_sinh =$request ->input('ngaysinh');
        $nhanvien->username =$request ->input('username');
        $nhanvien->password =hash::make($request ->input('matkhau'));
        $nhanvien->loai_account_id =$request ->input('loaitaikhoan');
        $nhanvien->bo_phan_id =$request ->input('bophan');
        $nhanvien->save();

        return redirect('danh-sach-nhan-vien')->with('success','Add success');
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
        $nhanvien=nhanvien::find($id);
        $id = $nhanvien->loai_account_id;
        $loaitaikhoan = LoaiAccount::all();
        $bophan= BoPhan::all();
        // $loai_tk_edit = LoaiAccount::select(['ten_loai_account'])->where([
        //     $id =>'loaiaccount.id'
        // ])->first();
        
        return view('nhan-vien.sua-nhan-vien',compact('bophan','loaitaikhoan','nhanvien'    ));
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
            'ten_nhan_vien'=>'required',
            'CMND'=>'required',
            'SDT'=>'required',
            'email'=>'required',
            'ngaysinh'=>'required',
            'username'=>'required',
            'matkhau'=>'required',
            'loaitaikhoan'=>'required',
            'bophan'  =>'required'
        ]);
        $nhanvien = NhanVien::find($id);
        $nhanvien->ho_ten_nv = $request->input('ten_nhan_vien');
        $nhanvien->CMND = $request->input('CMND');
        $nhanvien->SDT = $request->input('SDT');
        $nhanvien->email = $request->input('email');
        $nhanvien->ngay_sinh = $request->input('ngaysinh');
        $nhanvien->username = $request->input('username');
        $nhanvien->password = hash::make($request->input('matkhau'));
        $nhanvien->loai_account_id = $request->input('loaitaikhoan');
        $nhanvien->bo_phan_id = $request->input('bophan');
        $nhanvien->save();

        return redirect('danh-sach-nhan-vien')->with('success','Change success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nhanvien = NhanVien::find($id);
        $nhanvien->delete($id);
        return redirect('danh-sach-nhan-vien')->with('success','Delete success');

    }
}
