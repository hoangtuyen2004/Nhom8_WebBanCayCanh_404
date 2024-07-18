{{-- extends dùng đề kế thừa Layout --}}
@extends('layouts.admin')

@section('title')
@endsection

@section('css')
  
@endsection

@section('content')
    <div class="card">
        {{-- <h4 class="card-header">{{ $title }}</h4> --}}
        {{-- <div class="card-body">
            <a href="{{route('sanpham.create')}}" class="btn btn-succes">thêm sản phẩm</a>
            @if (session('success'))
                <div class=" alert alert-success">
                        {{session('success')}};
                </div>
            @endif
        </div> --}}
        <table class="table">
            <thead>
                <th>STT</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Ngày nhập</th>
                <th>Mô tả</th>
                <th>Trạng thái</th>
            </thead>
            <tbody>
                    @foreach ($san_phams as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <img src="{{ Storage::url($item->hinh_anh) }}" width="100" height="100" alt="">
                            </td>
                            <td>{{ $item->ten_san_pham }}</td>
                            <td>{{ $item->gia }}</td>
                            <td>{{ $item->so_luong }}</td>
                            <td>{{ $item->ngay_nhap }}</td>
                            <td>{{ $item->mo_ta }}</td>
                            <td>{{ $item->ten_danh_muc }}</td>
                            <td>
                                <a href="{{ route('sanpham.edit', $item->id) }}">
                                    <button class="btn bg-warning-subtle text-warning-emphasis">Sửa</button>
                                </a>
                                <form action="{{ route('sanpham.destroy', $item->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" onclick="return confirm('ban co muon xoa khong?')" class="btn btn-danger">Xóa</button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
@endsection

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
      var menuBtn = document.querySelector('.navbar-toggler');
      var sidebarMenu = document.querySelector('.sidebar-menu');
      var dashboardLink = document.querySelector('.dashboard-link');
      var dashboardSubmenu = document.querySelector('.sidebar-submenu');
      var productsLink = document.querySelector('.products-link');
      var productsSubmenu = document.querySelectorAll('.sidebar-submenu')[1];
      var ordersLink = document.querySelector('.orders-link');
      var ordersSubmenu = document.querySelectorAll('.sidebar-submenu')[2];
      var customersLink = document.querySelector('.customers-link');
      var customersSubmenu = document.querySelectorAll('.sidebar-submenu')[3];
    
      menuBtn.addEventListener('click', function() {
        sidebarMenu.classList.toggle('show');
      });
    
      dashboardLink.addEventListener('click', function(e) {
        e.preventDefault();
        dashboardSubmenu.classList.toggle('d-none');
      });
    
      productsLink.addEventListener('click', function(e) {
        e.preventDefault();
        productsSubmenu.classList.toggle('d-none');
      });
    
      ordersLink.addEventListener('click', function(e) {
        e.preventDefault();
        ordersSubmenu.classList.toggle('d-none');
      });
    
      customersLink.addEventListener('click', function(e) {
        e.preventDefault();
        customersSubmenu.classList.toggle('d-none');
      });
    });
    </script>
@endsection
