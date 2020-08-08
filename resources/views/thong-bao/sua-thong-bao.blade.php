@extends('layout')
@section('title')
    Sửa thông báo
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h4 class="page-title">Sửa thông báo</h4>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                

                {!!Form::open(['action' => ['ThongBaoController@update',$thongbao->id],'method'=> 'PUT']) !!}
                    <div class="form-group">
                        {{Form::label('title','Nội dung')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('noi_dung_tb',$thongbao->noi_dung_tb,['class'=> 'form-control','placeholder'=>'Nhập nội dung'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="canhoid" name="can_ho_id" required focus>
                        <option value="0"  selected>Tất cả căn hộ</option>        
                        @foreach($canho as $can_ho)
                        <option name="can_ho_id" value="{{$can_ho->id}}">{{ $can_ho->name }}</option>
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