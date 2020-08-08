@extends('layout')
@section('title')
    Đổi tên
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Đổi tên</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <form
                    action="{{ route('quan-tri-vien.xu-ly-doi-ten', ['id' => $quanTriVien->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <b>{{ $errors->first() }}</b>
                            </div>
                        @endif
                        <label>Họ tên mới<span class="text-danger">*</span></label>
                        <input type="text" name="ho_ten" placeholder="Nhập họ tên" class="form-control">
                    </div>
                    <div class="form-group text-left mb-0">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Lưu</button>
                        <a href="{{ route('quan-tri-vien.trang-ca-nhan') }}" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection