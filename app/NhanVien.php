<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\DB;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class NhanVien extends Model implements AuthenticatableContract 
{
    Use SoftDeletes;
    protected $dates = ['deleted_at'];
    //protected $table = 'NhanVien';

    protected $table = 'nhanvien';
    protected $fillable = [
             'id','ho_ten_nv','CMND','email','SDT','ngay_sinh','username','password','loai_account_id','bo_phan_id',
            ];
    use Authenticatable;
            
            
}
