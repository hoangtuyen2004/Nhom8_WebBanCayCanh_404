@extends('layouts.admin')
@section('title')
    Quản lí sản phẩm | ADMIN
@endsection

{{-- mã css --}}
@section('css')
@endsection

@section('content')
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="card">
                        <div class="card-header">
                            <h5>Danh sách san phẩm <a class="mx-3 btn btn-success" href="{{ route('sanpham.create') }}">Thêm mới</a>
                            </h5>
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
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Mô tả</th>
                                    <th>Danh mục</th>
                                    <th class="">Thao tác</th>
                                </thead>
                                <tbody>
                                    @foreach ($listSanPhams as $key=>$sanPham)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $sanPham->ma_san_pham }}</td>
                                            <td>{{ $sanPham->ten_san_pham }}</td>
                                            <td><img src="{{ Storage::url($sanPham->anh_san_pham) }}"  width="200px" alt="ảnh sản phẩm"></td>
                                            <td>{{ $sanPham->gia_san_pham }}</td>
                                            <td>{{ $sanPham->mo_ta_san_pham }}</td>
                                            <td>{{ $sanPham->ma_danh_mucs }}</td>
                                            <td class="row">
                                                <div class="row">
                                                    <a class="col btn btn-warning" href="{{ route('sanpham.edit', $sanPham->id) }}">Sửa</a>
                                                </div>
                                                <form class="col" action="{{ route('sanpham.destroy', $sanPham->id) }}" method="post" onsubmit="return confirm('ban co muon xoa khong?')">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Xóa</button>
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
{{-- mã javascript --}}
@section('js')
@endsection