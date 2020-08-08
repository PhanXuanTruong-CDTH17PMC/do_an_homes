@extends('layout')
@section('title')
    Thêm mới tin tức
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h4 class="page-title">Thêm mới tin tức</h4>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                @if($errors->any())
                 {{$errors}}
                @endif
                {!!Form::open(['action' => 'TinTucController@store','method'=> 'POST', 'class'=>'form-horizontal', 'enctype'=> 'multipart/form-data']) !!}
                <div class="form-group">
                        {{Form::label('title','Tiêu đề')}}<span class="text-danger"> 
                        *</span>
                        <div class="form-group">
                            {{Form::Text('tieu_de','',['class'=> 'form-control', 'name' => 'tieu_de', 'placeholder'=>'Nhập tiêu đề'])}}
                        </div> 
                        </div>
                    <div class="form-group">
                        {{Form::label('title','Nội dung')}}<span class="text-danger"> 
                        *</span>
                        <div class="form-group">
                            {{Form::Textarea('noi_dung_tt','',['class'=> 'form-control', 'name' => 'noi_dung_tt', 'placeholder'=>'Nhập nội dung','id'=>'editor1'])}}
                        </div> 
                        </div>
                        <div class="form-group">
                            {{Form::label('title','Ảnh minh họa')}}<span class="text-danger"> *</span>
                        <div class="form-group">
                            <input type="file" class= 'form-control' name='anh_dai_dien'/>
                            <label> <b>Lưu ý:<u></u> </b><small srylr="color:red">Chỉ chọn file có phần mở rộng: png, img, jpg</small></label>
                        </div> 
                        @if(session('success'))
                        <p style="color:red"> {{ session('success') }} </p>
                        @endif
                    </div>
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    {{Form::button('Hủy',['class'=>'btn btn-purple waves-effect waves-light'])}}
                    {!!Form::close() !!}
            </div>
        </div>
    </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('ckfinder/ckfinder.js') }}"></script>
    <script>
		CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
		</script>
@endsection