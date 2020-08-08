@extends('layout')
@section('title')
    Sửa nhân viên
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h4 class="page-title">Sửa thông tin nhân viên</h4>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                {!!Form::open(['action' => ['NhanVienController@update',$nhanvien->id],'method'=> 'PUT']) !!}
                    <div class="form-group">
                        {{Form::label('title','Tên Nhân Viên')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('ten_nhan_vien',$nhanvien->ho_ten_nv,['class'=> 'form-control','placeholder'=>'Nhập tên nhân viên'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','CMND')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('CMND',$nhanvien->CMND,['class'=> 'form-control','placeholder'=>'Nhập số CMND'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Số điện thoại')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('SDT',$nhanvien->SDT,['class'=> 'form-control','placeholder'=>'Nhập số điện thoại liên lạc'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Email')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('email',$nhanvien->email,['class'=> 'form-control','placeholder'=>'Nhập email liên lạc'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Ngày sinh')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Date('ngaysinh',$nhanvien->ngay_sinh,['class'=> 'form-control'])}}
                    </div> 
                     <div class="form-group">
                        {{Form::label('title','Tên đăng nhập')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('username',$nhanvien->username,['class'=> 'form-control','placeholder'=>'Nhập tên đăng nhập'])}}
                    </div> 
                    <div class="form-group">
                        {{Form::label('title','Mật khẩu')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('matkhau',$nhanvien->password,['class'=> 'form-control','placeholder'=>'Nhập mật khẩu'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Loại tài khoản')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        <select class="form-control" id="loaitaikhoan" name="loaitaikhoan" required focus>
                        <option value="" disabled selected></option>       
                        <option value="" >Chọn loại tài khoản</option>        
                        @foreach($loaitaikhoan as $loai_tk)
                        <option name="loaitk" value="{{$loai_tk->id}}">{{ $loai_tk->ten_loai_account }}</option>
                        @endforeach
                        </select>
                    </div> 
                    </div
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Bộ phận')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        <select class="form-control" id="bophan" name="bophan" required focus>
                        <option value="" disabled selected>Chọn bộ phận</option>        
                        @foreach($bophan as $bo_phan)
                        <option name="tenbophan" value="{{$bo_phan->id}}">{{ $bo_phan->ten_bo_phan }}</option>
                        @endforeach
                        </select>
                    </div> 
                    </div>

                    
                    
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    {{Form::button('Hủy',['class'=>'btn btn-purple waves-effect waves-light'])}}
                    {!!Form::close() !!}
            </div>
        </div>
    </div>
@endsection