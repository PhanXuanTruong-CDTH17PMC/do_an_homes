<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Hash;
use App\NhanVien;
use App\TinTuc;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class LoginController extends Controller
{
	function index (){
		if(Auth::check())
		{
			return redirect('danh-sach-nhan-vien');
		}
		else 
		{
			return view('quan-tri-vien.dang-nhap');
		}
	}

    public function getLogin(Request $request){
    	$arr=[
	    'username'=>$request->username,
	    'mat_khau'=>$request ->password,
		];
		if(Auth::guard('canho')->attempt(['name'=>$arr['username'],'password'=>$arr['mat_khau']])){
			$tintuc=TinTuc::all();
			return redirect('/user')->with('success','Login success');
	     }
		 else if (Auth::guard('nhanvien')->attempt(['username'=>$arr['username'],'password'=>$arr['mat_khau']])){
			return redirect('danh-sach-nhan-vien')->with('success','Log in success');
		
			}
	     else {	     	
	     	 return redirect('/log-in')->with('error','Log in fail');
		 }
		
	}

	public function logout(){
		Auth::logout();
		return view('quan-tri-vien.dang-nhap');
	}
}
