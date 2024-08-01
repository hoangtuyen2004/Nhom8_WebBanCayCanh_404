@extends('layouts.admin')
@section('title')
    Quản lý đơn hàng | ADMIN
@endsection
@section('content')
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="card">
                        @if (session('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                        <div class="card-header">
                            <h5>Quản lý đơn hàng</h5>
                            <div class="card-header-right">
                                <form action="" class="input-group">
                                    <input type="search" placeholder="bạn cần tìm gì..." name="cearch" class="form-control">
                                    <button type="submit" class="btn-info">Tìm</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-table">
                            <table class="table tex-center">
                                <thead>
                                    <th>STT</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Tổng tiền</th>
                                    <th>Ngay tạo đơn</th>
                                    <th>Trạng thái</th>
                                    <th>Thêm</th>
                                </thead>
                                <tbody>
                                    @foreach ($donHangs as $key=>$donHang)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$donHang->ma_hoa_dons}}</td>
                                            <td>{{$donHang->tong_tien}}đ</td>
                                            <td>{{$donHang->ngay_tao}}</td>
                                            <td>@if($donHang->trang_thai ==1)<span class="label label-secondary">Chờ xác nhận @endif
                                                @if($donHang->trang_thai ==2)<span class="label label-info">Đã Xác Nhận @endif
                                                @if($donHang->trang_thai ==3)<span class="label label-primary">Đang Giao @endif
                                                @if($donHang->trang_thai ==4)<span class="label label-success">Đã Giao @endif
                                                @if($donHang->trang_thai ==5)<span class="label label-danger">Hủy @endif</span></td>
                                            <td>
                                                <form action="{{ route('admin-don-hang.destroy',$donHang->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{route('admin-don-hang.show',$donHang->id)}}" class="btn btn-warning">Chi tiết</a>
                                                    <button class="btn btn-danger" type="submit">Xóa</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
