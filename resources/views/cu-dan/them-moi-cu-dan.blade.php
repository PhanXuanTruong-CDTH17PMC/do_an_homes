@extends('layout')
@section('title')
    Thêm mới cư dân
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h4 class="page-title">Thêm mới cư dân</h4>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                
                {!!Form::open(['action' => 'CuDanController@store','method'=> 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('title','Họ tên cư dân')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('ten_cu_dan','',['class'=> 'form-control','placeholder'=>'Nhập tên cư dân'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','CMND')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('cmnd','',['class'=> 'form-control','placeholder'=>'Nhập số CMND'])}}
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
                        {{Form::label('title','Căn hộ')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        <select class="form-control" id="canho" name="can_ho" required focus>
                        <option value="" disabled selected>Chọn căn hộ</option>        
                        @foreach($canho as $can_ho)
                        <option name="canho" value="{{$can_ho->id}}">{{ $can_ho->id }}</option>
                        @endforeach
                        </select>
                    </div> 
                    </div> 
                    <div class="form-group">
                        {{Form::label('title','Quan hệ với chủ hộ')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        <select class="form-control" id="quanhe" name="quanhe" required focus>
                        <option value="" disabled selected>Chọn quan hệ</option>        
                        @foreach($quanhe as $quan_he)
                        <option name="quanhe" value="{{$quan_he->id}}">{{ $quan_he->ten_quan_he }}</option>
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