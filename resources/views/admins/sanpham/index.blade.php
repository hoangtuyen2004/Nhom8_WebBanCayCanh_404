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
