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

@endsection
