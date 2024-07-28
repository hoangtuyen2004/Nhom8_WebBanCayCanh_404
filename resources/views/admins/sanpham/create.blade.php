
{{-- extends: Chỉ định layout được sử dụng --}}
@extends('layouts.admin')

{{-- section: định nghĩa nội dung của section --}}
@section('content')
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="card">
                        <h4 class="card-header">Thêm sản phẩm</h4>
                        <div class="container">
                            <form action="{{ route('sanpham.store') }}" method="POST" enctype="multipart/form-data">
                                {{-- 1 cơ chế bảo mật của laravel --}}
                                @csrf
                                <div class="row my-3">
                                    <div class="col">
                                        <label for="" class="form-lable">Mã sản phẩm</label>
                                        <input type="text" name="ma_san_pham" class="form-control ">
                                        @error('ma_san_pham')
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-lable">Tên sản phẩm</label>
                                        <input type="text" name="ten_san_pham" class="form-control">
                                        @error('ten_san_pham')
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="my-3">
                                    <label for="" class="form-lable">Ảnh sản phẩm</label>
                                    <input type="file" name="anh_san_pham" class="form-control">
                                    @error('anh_san_pham')
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                </div>
                                <div class="row my-3">
                                    <div class="col">
                                        <label for="" class="form-lable">Số lượng</label>
                                        <input type="number" name="so_luong" class="form-control ">
                                        @error('so_luong')
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-lable">Giá</label>
                                        <input type="number" name="gia_san_pham" class="form-control">
                                        @error('gia_san_pham')
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="my-3">
                                    <label for="" class="form-lable">Mô tả sản phẩm</label>
                                    <textarea name="mo_ta_san_pham" class="form-control" cols="15" rows="10"></textarea>
                                    @error('mo_ta_san_pham')
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Danh mục:</label>
                                    <select class="form-select form-control-inverse fill" name="ma_danh_mucs">
                                        @foreach ($danh_mucs as $item)
                                            <option value="{{ $item->id }}">{{ $item->ten_danh_muc }}</option>
                                        @endforeach
                                    </select>
                                    @error('ma_danh_muc')
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                </div>
                                <div class="mb-3 d-flex justify-content-center" style="gap: 20px">
                                    <button type="submit" class="btn btn-success">Thêm mới</button>
                                    <a class="btn btn-info" href="{{ route('sanpham.index') }}">Quay lại</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
