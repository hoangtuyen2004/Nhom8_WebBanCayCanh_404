@extends('layouts.admin')
@section('title')
    Chi tiết đơn hàng | ADMIN
@endsection
@section('content')
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="card">
                        <div class="card-header">
                            <h5>Chi tiết đơn hàng: {{$donHang->ma_hoa_dons}}</h5>
                            <div class="card-header-right">
                            </div>
                        </div>
                        <div class="card-table">
                            <div class="p-3">
                                <h6 class=""><strong style="font-weight: bold">Thông tin người nhận:</strong></h6><hr>
                                <div class="px-3 mb-3">
                                    <p>Tài khoản người dùng: <i><span style="font-size: 18px">{{$taiKhoan->name}}</span></i></p>
                                    <p>Tên người nhận: <i><span style="font-size: 18px">{{$donHang->ten_nguoi_nhan}}</span></i></p>
                                    <p>Địa chỉ nhận hàng: <i><span style="font-size: 18px">{{$donHang->dia_chi}}</span></i></p>
                                    <p>Email người nhận: <i><span style="font-size: 18px">{{$donHang->email}}</span></i></p>
                                    <p>Sô điện thoại: <i><span style="font-size: 18px">{{$donHang->so_dien_thoai}}</span></i></p>
                                    <p>Ngay đặt hàng: <i><span style="font-size: 18px">{{$donHang->ngay_tao}}</span></i></p>
                                    <p>Hình thức thanh toán: <i><span style="font-size: 18px">{{$donHang->hinh_thuc_thanh_toan}}</span></i></p>
                                </div>
                                <h6><strong style="font-weight: bold">Thông tin đơn hàng:</strong></h6><hr>
                                <div class="px-3 mb-3">
                                    <p>Trạng thái đơn hàng: <i><span style="font-size: 18px">
                                        @if($donHang->trang_thai ==1)Chờ xác nhận @endif
                                        @if($donHang->trang_thai ==2)Đã Xác Nhận @endif
                                        @if($donHang->trang_thai ==3)Đang Giao @endif
                                        @if($donHang->trang_thai ==4)Đã Giao @endif
                                        @if($donHang->trang_thai ==5)Hủy @endif
                                    </span></i></p>
                                    <p>Tông tiền: <i><span style="font-size: 18px">{{$donHang->tong_tien}}đ</span></i></p>
                                    <table class="table text-center">
                                        <thead>
                                            <th>STT</th>
                                            <th>Ảnh</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>
                                            <th>Tổng giá</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($donHangChiTiets as $key=>$donHangChiTiet)
                                            @foreach ($sanPhams as $sanPham)
                                            @if ($donHangChiTiet->ma_san_phams == $sanPham->id)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td><img src="{{$sanPham->anh_san_pham}}" alt="{{$sanPham->ten_san_pham}}"></td>
                                                    <td>{{$sanPham->ten_san_pham}}</td>
                                                    <td>{{$donHangChiTiet->so_luong}}</td>
                                                    <td>{{$donHangChiTiet->gia}}</td>
                                                    <td>{{$donHangChiTiet->so_luong*$donHangChiTiet->gia}}</td>
                                                </tr>  
                                            @endif  
                                            @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="text-center p-3">
                                        <form action="{{ route('admin-don-hang.update',$donHang->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            @if ($donHang->trang_thai ==1)
                                                <input class="btn btn-success" type="submit" name="xac_nhan" value="Xác nhận đơn hàng">
                                                <input onclick="return confirm('Bạn chắc chắn không xác nhận đơn hàng')" class="btn btn-danger" type="submit" name="huy" value="Không xác nhận đơn hàng">
                                            @endif
                                            @if($donHang->trang_thai ==2)
                                                <input class="btn btn-primary" name="dang_giao" type="submit" value="Đang giao">
                                            @endif
                                            @if($donHang->trang_thai ==3)
                                                <input class="btn btn-success" name="da_giao" type="submit" value="Đã giao">
                                            @endif
                                            <a href="/admin-don-hang" class="btn btn-info">Quay lại</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
