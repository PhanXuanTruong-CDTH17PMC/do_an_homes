@extends('layout')
@section('title')
    Danh sách căn hộ
@endsection
@section('css')

    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
  
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
    <!-- third party js -->
    <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
    <!-- third party js ends -->

    <!-- Sweet Alert2 js-->
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    
    <!-- Datatables init -->
    <script src="{{ asset('assets/js/pages/init/datatables.init.js') }}"></script>

    <!-- Sweet Alert2 QuanTriVien init js-->
    <script src="{{ asset('assets/js/pages/init/sweet-alerts-quan-tri-vien.init.js') }}"></script>
    
@endsection
@section('main-content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Căn hộ</h4>
            <a href="/can-ho/create" style="margin-bottom:10px;" class="btn btn-primary waves-effect waves-light">Thêm mới căn hộ</a>
			<a href="/loai-can-ho" style="margin-bottom:10px;" class="btn btn-primary waves-effect waves-light">Quản lý loại căn hộ</a>
            
            <!-- @if (isset($quanTriViens))
                <a href="{{ route('quan-tri-vien.thung-rac') }}" style="margin-bottom:10px;" class="btn btn-info waves-effect waves-light">Xem quản trị viên đã xóa</a>
            @endif -->
        </div>
    </div>
</div>
<!-- end page title --> 
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table dt-responsive nowrap">
                    <thead>
                        <tr style="background-color:#6c757d;; color:white">
                            <th>ID</th>
                            <th>Tầng</th>
                            <th>Diện tích</th>
                            <th>Tên căn hộ</th>
                            <th>Loại căn hộ</th>
                            <th>Chủ hộ</th>
                            <th>     </th>
                        </tr>


                        @if (count($canho )>0)
                            @foreach ($canho as $can_ho )
                                    <tr>
                                        <th>{{$can_ho-> canho_id}}</th>
                                        <th>{{$can_ho-> Tang}}</th>
                                        <th>{{$can_ho-> dien_tich}}</th> 
                                        <th>{{$can_ho-> name}}</th>   
                                        <th>{{$can_ho-> tenloaicanho}}</th>
                                        <th>{{$can_ho-> chuho}}</th>
                                         <th style="width: 200px">
                                            <div>
                                            <a href="/can-ho/{{$can_ho->canho_id}}/edit" class="btn btn-info" >Edit</a>
                                            {!!Form::open(['action'=> ['CanHoController@destroy',$can_ho-> canho_id],'method' =>'POST','class'=>'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                            </div>
                                        </th>
                                    </tr>                              
                            @endforeach    
                        @else
                        @endif
                    </thead>
                    <!--  -->
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection