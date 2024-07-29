@extends('layouts.admin')
@section('title')
Quản lí danh mục | ADMIN
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
                            <h5>Danh mục <a class="mx-3 btn btn-success" href="{{ route('danhmuc.create') }}">Thêm mới</a></h5>
                            <span>use class <code>table</code> inside table element</span>
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
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{session('success')}}
                                    </div>
                                @endif
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã danh mục</th>
                                            <th>Tên danh mục</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($danhmucs as $key => $danhmuc)
                                            <tr class="w-100 text-center">
                                                <th scope="row">{{$key+1}}</th>
                                                <td>{{$danhmuc->ma_danh_muc}}</td>
                                                <td>{{$danhmuc->ten_danh_muc}}</td>
                                                <td>
                                                    <a href="{{ route('danhmuc.edit',$danhmuc->id)}}" class="btn btn-warning" type="submit">Sửa</a>
                                                    <form action="{{ route('danhmuc.destroy',$danhmuc->id) }}" onsubmit="return confirm('Bạn có chắc muốn xóa!')" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">Xóa</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$danhmucs->links('pagination::simple-bootstrap-5')}}
                            </div>
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
