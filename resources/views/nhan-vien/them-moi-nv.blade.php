@extends('layout')
@section('title')
    Thêm mới nhân viên
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h4 class="page-title">Thêm mới nhân viên</h4>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <!-- <form
                    
                    <div class="form-group">
                        
                        <label>Tên nhân viên<span >class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập tên nhân viên" class="form-control">
                        <label>CMND<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập số CMND" class="form-control">
                        <label>Số điện thoại<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập số điện thoại" class="form-control" >
                        <label>Email<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập email" class="form-control">
                        <label>Ngày sinh<span class="text-danger">*</span></label>
                        <input type="date"  placeholder="Ngày sinh" class="form-control">
                        <label>Mật khẩu<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập mật khẩu" class="form-control">
                        <label>Loại tài khoản<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Loại tài khoản" class="form-control">
                        <label>Bộ phận<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Bộ phận" class="form-control">
                    </div>
                    <div class="form-group text-left mb-0">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Lưu</button>
                        <a href="#" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    </div>
                </form> -->
                {!!Form::open(['action' => 'NhanVienController@store','method'=> 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('title','Tên Nhân Viên')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('ten_nhan_vien','',['class'=> 'form-control','placeholder'=>'Nhập tên nhân viên'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','CMND')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('CMND','',['class'=> 'form-control','placeholder'=>'Nhập số CMND'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Số điện thoại')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('SDT','',['class'=> 'form-control','placeholder'=>'Nhập số điện thoại liên lạc'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Email')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('email','',['class'=> 'form-control','placeholder'=>'Nhập email liên lạc'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Ngày sinh')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Date('ngaysinh','',['class'=> 'form-control'])}}
                    </div> 
                     <div class="form-group">
                        {{Form::label('title','Tên đăng nhập')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('username','',['class'=> 'form-control','placeholder'=>'Nhập tên đăng nhập'])}}
                    </div> 
                    <div class="form-group">
                        {{Form::label('title','Mật khẩu')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('matkhau','',['class'=> 'form-control','placeholder'=>'Nhập mật khẩu'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Loại tài khoản')}}<span class="text-danger"> 
                    *</span>


                    
                    <div class="form-group">
                        <select class="form-control" id="loaitaikhoan" name="loaitaikhoan" required focus>
                        <option value="" disabled selected>Chọn loại tài khoản</option>        
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
                        <option value="" disabled selected>Chọn bộ phận </option>        
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