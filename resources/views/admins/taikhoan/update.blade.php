@extends('layouts.admin')
@section('title')
    Quản lí tài khoản | ADMIN
@endsection
@section('content')
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="card">
                    <div class="card-header">
                        <h5>Sửa tài khoản</h5>
                    </div>
                    <div class="card-body">  
                        <form action="{{ route('admin-tai-khoans.update',$taiKhoan->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="" class="form-label">ID Tài Khoản:</label>
                                <input type="text" class="form-control" name="" value="{{ $taiKhoan->id }}" readonly id="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tên Tài Khoản:</label>
                                <input type="text" class="form-control" name="" value="{{ $taiKhoan->name }}" readonly id="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tên Tài Khoản:</label>
                                <input type="text" class="form-control" name="" value="{{ $taiKhoan->name }}" readonly id="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email:</label>
                                <input type="text" class="form-control" name="" value="{{ $taiKhoan->email }}" readonly id="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Trạng thái</label>
                                <select name="trang_thai" id="" class="form-control">
                                    <option {{$taiKhoan->trang_thai == 1 ? "selected" : ""}} value="1">Người dùng</option>
                                    <option {{$taiKhoan->trang_thai == 2 ? "selected" : ""}} value="2">Admin</option>
                                </select>
                            </div>
                            <button name="submit" class="btn btn-info" type="submit">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection