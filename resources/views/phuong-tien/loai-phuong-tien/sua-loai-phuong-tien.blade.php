@extends('layout')
@section('title')
    Sửa loại phương tiện
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h4 class="page-title">Sửa loại phương tiện</h4>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                

                    {!!Form::open(['action' => ['LoaiPhuongTienController@update',$loaiphuongtien->id],'method'=> 'PUT']) !!}
                    <div class="form-group">
                    {{Form::label('title','Tên loại phương tiện')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('ten_loai_phuong_tien',$loaiphuongtien->ten_loai_phuong_tien,['class'=> 'form-control','placeholder'=>'Nhập tên loại phương tiện'])}}
                    </div> 
                    </div>
                    </div>
                    
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    {{Form::button('Hủy',['class'=>'btn btn-purple waves-effect waves-light'])}}
                    {!!Form::close() !!}


                    
        </div>
    </div>
@endsection