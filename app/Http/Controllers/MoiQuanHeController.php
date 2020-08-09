<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanHe;

class MoiQuanHeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quanhe= QuanHe::all();
        return view('cu-dan.moi-quan-he.danh-sach-moi-quan-he')->with('quanhe',$quanhe);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cu-dan.moi-quan-he.them-moi-quan-he');
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
            'ten_moi_quan_he'=>'required'  
        ]);

        $quanhe = new QuanHe;
        $quanhe->ten_quan_he =$request ->input('ten_moi_quan_he');
        $quanhe->save();

        return redirect('quan-he')->with('success','Add success');
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
        $quanhe=QuanHe::find($id);
        return view('cu-dan.moi-quan-he.sua-moi-quan-he')->with('quanhe',$quanhe);
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
            'ten_moi_quan_he'=>'required'  
        ]);

        $quanhe = QuanHe::find($id);
        $quanhe->ten_quan_he =$request ->input('ten_moi_quan_he');
        $quanhe->save();

        return redirect('quan-he')->with('success','Change success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quanhe = QuanHe::find($id);
        
        $quanhe->delete($id);

        return redirect('quan-he')->with('success','Delete success');
    }
}
