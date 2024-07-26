{{-- extends: Chỉ định layout được sử dụng --}}
@extends('layouts.admin')

{{-- section: định nghĩa nội dung của section --}}
@section('content')
    <div class="card">
        <h4 class="card-header">Sửa sản phẩm</h4>
        <div class="card-body">
            <form action="{{ route('sanpham.update', $sanPham->id) }}" method="POST" enctype="multipart/form-data">
                {{-- 1 cơ chế bảo mật của laravel --}}
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Hình ảnh:</label>
                    <input type="file" class="form-control" name="hinh_anh">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tên sản phẩm:</label>
                    <input type="text" class="form-control" name="ten_san_pham" value="{{$sanPham->ten_san_pham}}" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Số lượng:</label>
                    <input type="number" class="form-control" value="{{$sanPham->so_luong}}" min="1" name="so_luong"
                        placeholder="Nhập số lượng sản phẩm">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Giá sản phẩm:</label>
                    <input type="number" class="form-control" value="{{$sanPham->gia}}" min="1" name="gia"
                        placeholder="Nhập giá sản phẩm">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Ngày nhập:</label>
                    <input type="date" class="form-control" min="1" value="{{$sanPham->ngay_nhap}}" name="ngay_nhap">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Mô tả:</label>
                    <textarea class="form-control" rows="3" name="mo_ta"placeholder="Nhập mô tả sản phẩm">{{$sanPham->mo_ta}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Danh mục:</label>
                    <select class="form-select" name="danh_muc_id">
                        @foreach ($danh_mucs as $item)
                            <option {{ $item->id == $sanPham->danh_muc_id ? 'selected' : ''}} value="{{ $item->id }}">{{ $item->ten_danh_muc }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Sửa sp</button>
                </div>
            </form>
        </div>
    </div>
@endsection
