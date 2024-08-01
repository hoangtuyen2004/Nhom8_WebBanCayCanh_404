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
                        <h5>Danh sách san phẩm</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li class="first-opt">
                                    <i class="feather icon-chevron-left open-card-option"></i>
                                </li>
                                <li>
                                    <i class="feather icon-maximize full-card"></i>
                                </li>
                                <li>
                                    <i class="feather icon-minus minimize-card"></i>
                                </li>
                                <li>
                                    <i class="feather icon-refresh-cw reload-card"></i>
                                </li>
                                <li>
                                    <i class="feather icon-chevron-left open-card-option"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-table">
                        <table class="table text-center">
                            <thead>
                                <th>STT</th>
                                <th>Tên tài khoản</th>
                                <th>Email</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </thead>
                            <tbody>
                                @foreach ($taiKhoans as $key=>$taiKhoan)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$taiKhoan->name}}</td>
                                        <td>{{$taiKhoan->email}}</td>
                                        <td>@if ($taiKhoan->trang_thai == 1)
                                            Người dùng
                                            @elseif ($taiKhoan->trang_thai == 2)
                                            Admin
                                        @endif</td>
                                        <td class="">
                                            <form action="{{ route('admin-tai-khoans.destroy',$taiKhoan->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-warning" href="{{ route('admin-tai-khoans.edit',$taiKhoan->id) }}">Sửa</a>
                                                <button type="submit" class="btn btn-danger">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$taiKhoans->links('pagination::bootstrap-5')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection