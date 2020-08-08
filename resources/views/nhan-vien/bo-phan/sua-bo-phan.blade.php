@extends('layout')
@section('title')
    Thêm mới bộ phận
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h4 class="page-title">Sửa thông tin bộ phận</h4>
                
            </div>
        </div>
    </div>
     @include('messages.messages')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                

                    {!!Form::open(['action' => ['BoPhanController@update',$bophan->id],'method'=> 'PUT']) !!}
                    <div class="form-group">
                    {{Form::label('title','Tên bộ phận')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('ten_bo_phan',$bophan->ten_bo_phan,['class'=> 'form-control','placeholder'=>'Nhập tên Bộ Phận'])}}
                    </div> 
                    </div>
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    {{Form::button('Hủy',['class'=>'btn btn-purple waves-effect waves-light'])}}
                    {!!Form::close() !!}


                    
        </div>
    </div>
@endsection