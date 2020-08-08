@extends('layout')
@section('title')
    Thêm mới quản trị viên
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Thêm mới quản trị viên</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <form action="{{ route('quan-tri-vien.xu-ly-them-moi') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <b>{{ $errors->first() }}</b>
                                </div>
                        @elseif(isset($msg))
                            <div class="alert alert-success">
                                <b>{{ $msg }}</b>
                            </div>
                        @endif
                        <label>Tên đăng nhập<span class="text-danger">*</span></label>
                        <input type="text" name="ten_dang_nhap" placeholder="Nhập tên đăng nhập" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu<span class="text-danger">*</span></label>
                        <input type="password" name="mat_khau" placeholder="Nhập mật khẩu" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Họ tên<nav></nav><span class="text-danger">*</span></label>
                        <input type="text" name="ho_ten" placeholder="Nhập họ tên" class="form-control">
                    </div>
                    <div class="form-group text-left mb-0">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Lưu</button>
                        <a href="{{ route('quan-tri-vien.danh-sach') }}" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection