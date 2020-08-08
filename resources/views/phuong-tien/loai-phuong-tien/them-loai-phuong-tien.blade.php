@extends('layout')
@section('title')
    Thêm mới loại phương tiện
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h4 class="page-title">Thêm loại phương tiện</h4>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                    {!!Form::open(['action' => 'LoaiPhuongTienController@store','method'=> 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('title','Tên loại phương tiện')}}
                        <span class="text-danger">*</span>
                        <div class="form-group">
                            {{Form::Text('ten_loai_phuong_tien','',['class'=> 'form-control','placeholder'=>'Nhập tên loại phương tiện'])}}
                        </div> 
                    </div>
                    <div class="form-group">
                    {{Form::label('title','Dịch vụ')}}<span class="text-danger">*</span>
                    <div class="form-group">
                        <select class="form-control" id="dich_vu" name="dich_vu" required focus>
                        <option value="" disabled selected>Chọn dịch vụ</option>        
                        @foreach($dichvu as $dich_vu)
                        <option name="ten_dichvu" value="{{$dich_vu->id}}">{{ $dich_vu->ten_dich_vu }}</option>
                        @endforeach
                        </select>
                    </div> 
                    </div>
                    </div>
                    
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    {{Form::button('Hủy',['class'=>'btn btn-purple waves-effect waves-light'])}}
                    {!!Form::close() !!}


                    
        </div>
    </div>
@endsection