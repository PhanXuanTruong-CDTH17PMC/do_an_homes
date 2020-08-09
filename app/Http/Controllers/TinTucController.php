<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;
class TinTucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tintuc=TinTuc::all();
        return view('tin-tuc.danh-sach-tin-tuc')->with('tintuc',$tintuc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tin-tuc.them-tin-tuc');
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
            'tieu_de' =>'required',
            'noi_dung_tt'=>'required',
            'anh_dai_dien'=>'required'
        ]
        );
        if($request->hasFile('anh_dai_dien')) {
            $this->validate($request, 
                [
                    'anh_dai_dien' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],			
                [
                    'anh_dai_dien.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
                    'anh_dai_dien.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
                ]
            );
            $file = $request->file('anh_dai_dien');
            $file_name = time().'_'.$file->getClientOriginalName();
            $filePath = public_path('assets\images');
            $file->move($filePath, $file_name);
            $tintuc = new Tintuc;
            $tintuc->tieu_de = $request->input('tieu_de');
            $tintuc->noi_dung_tt = $request->input('noi_dung_tt');
            $tintuc->anh_dai_dien = $file_name;
            $tintuc->nhan_vien_id=1;
            $tintuc->save();
        }
        
        return redirect()->route('danh-sach-tin-tuc')->with('success','Thêm thành công!');
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
        $tintuc=TinTuc::find($id);
        return view('tin-tuc.sua-tin-tuc')->with('tintuc',$tintuc);
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
                 'tieu_de' =>'required',
                'noi_dung_tt'=>'required',
                'anh_dai_dien'=>'required',

            ],			
            [
                'noi_dung_tt.required' => 'Vui lòng nhập nội dung tin tức',
                'anh_dai_dien.required' => 'Vui lòng chọn ảnh',
            ]
        );
        if($request->hasFile('anh_dai_dien')) {
            $this->validate($request, 
                [
                    'anh_dai_dien' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],			
                [
                    'anh_dai_dien.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
                    'anh_dai_dien.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
                ]
            );
            $file = $request->file('anh_dai_dien');
            $file_name = time().'_'.$file->getClientOriginalName();
            $filePath = public_path('assets\images');
            $file->move($filePath, $file_name);
            $tintuc =  TinTuc::find($id);
            $tintuc->tieu_de = $request->input('tieu_de');
            $tintuc->noi_dung_tt = $request->noi_dung_tt;
            $tintuc->anh_dai_dien = $file_name;
            $tintuc->nhan_vien_id=1;
            $tintuc->save();
        }
        
        return redirect()->route('danh-sach-tin-tuc')->with('success','Thêm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $tintuc=TinTuc::find($id);
        $tintuc->delete($id);
        return redirect('danh-sach-tin-tuc')->with('success','Delete success');
    }
}
