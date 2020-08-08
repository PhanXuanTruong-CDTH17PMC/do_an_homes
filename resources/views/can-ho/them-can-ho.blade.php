@extends('layout')
@section('title')
    Thêm mới căn hộ
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h4 class="page-title">Thêm mới căn hộ</h4>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                {!!Form::open(['action' => 'CanHoController@store','method'=> 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('title','Tầng')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('tang','',['class'=> 'form-control','placeholder'=>'Nhập tầng'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Diện tích')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('dientich','',['class'=> 'form-control','placeholder'=>'Nhập diện tích căn hộ'])}}
                    </div> 
                    <div class="form-group">
                        {{Form::label('title','Tên căn hộ')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('tencanho','',['class'=> 'form-control','placeholder'=>'Nhập tên căn hộ'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Mật khẩu')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('matkhau','',['class'=> 'form-control','placeholder'=>'Nhập mật khẩu căn hộ'])}}
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
                        {{Form::label('title','Chủ hộ')}}<span class="text-danger"> *</span>
                    <div class="form-group">
                        <select class="form-control" id="chuho" name="chuho" required focus>
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