@extends('layout')
@section('title')
    Sửa căn hộ
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h4 class="page-title">Sửa thông tin căn hộ</h4>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <!-- <form
                    
                    <div class="form-group">
                        
                        <label>Tầng<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập số tầng" class="form-control">
                        <label>Diện tích<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập diện tích" class="form-control">
                        <label>Password<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập mật khẩu cho tài khoản căn hộ" class="form-control">
                        <label>Loại căn hộ<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập loại căn hộ" class="form-control">
                        <label>Chủ hộ<span class="text-danger">*</span></label>
                        <input type="text"  placeholder="Nhập tên chủ hộ" class="form-control">
                        
                    </div>
                    
                    <div class="form-group text-left mb-0">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Lưu</button>
                        <a href="#" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    </div>
                </form> -->

                {!!Form::open(['action' => ['CanHoController@update',$canho->id],'method'=> 'PUT']) !!}
                    <div class="form-group">
                        {{Form::label('title','Tầng')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('tang',$canho->Tang,['class'=> 'form-control','placeholder'=>'Nhập tầng'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Diện tích')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('dientich',$canho->dien_tich,['class'=> 'form-control','placeholder'=>'Nhập diện tích căn hộ'])}}
                    </div> 
                    <div class="form-group">
                        {{Form::label('title','Tên căn hộ')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('tencanho',$canho->name,['class'=> 'form-control','placeholder'=>'Nhập tên căn hộ'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Mật khẩu')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('matkhau',$canho->password,['class'=> 'form-control','placeholder'=>'Nhập mật khẩu căn hộ'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Loại căn hộ')}}<span class="text-danger"> 
                    *</span>
                    
                    <div class="form-group">
                        <select class="form-control" id="loaicanho" name="loaicanho" required focus>
                        <option value="" disabled selected>Chọn loại căn hộ </option>        
                        @foreach($loaicanho as $loai_can_ho)
                        <option name="ten_loaicanho" value="{{$loai_can_ho->id}}">{{ $loai_can_ho->ten_loai_can_ho }}</option>
                        @endforeach
                        </select>
                    </div> 


                    </div>
                    <div class="form-group">
                        {{Form::label('title','Chủ hộ')}}<span class="text-danger"> 
                    *</span>
                    
                    <div class="form-group">
                        <select class="form-control" id="bophan" name="chuho" required focus>
                        <option value="" disabled selected>Chọn chủ hộ </option>        
                        @foreach($cudan as $chu_ho)
                        <option name="tenchuho" value="{{$chu_ho->id}}">{{ $chu_ho->ho_ten_cd }}</option>
                        @endforeach
                        </select>
                    </div> 
                    
                    
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    {{Form::button('Hủy',['class'=>'btn btn-purple waves-effect waves-light'])}}
                    {!!Form::close() !!}
            </div>
        </div>
    </div>
@endsection