@extends('layout')
@section('title')
    Thêm mới loại căn hộ
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h4 class="page-title">Thêm loại căn hộ</h4>
                
            </div>
        </div>
    </div>
     @include('messages.messages')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                

                    {!!Form::open(['action' => 'LoaiCanHoController@store','method'=> 'POST']) !!}
                    <div class="form-group">
                    {{Form::label('title','Tên loại căn hộ')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('ten_loai_can_ho','',['class'=> 'form-control','placeholder'=>'Nhập tên loại căn hộ'])}}
                    </div> 
                    </div>
                    
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    {{Form::button('Hủy',['class'=>'btn btn-purple waves-effect waves-light'])}}
                    {!!Form::close() !!}


                    
        </div>
    </div>
@endsection