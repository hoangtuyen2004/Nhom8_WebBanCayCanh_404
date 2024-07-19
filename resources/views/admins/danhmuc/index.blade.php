@extends('layouts.admin')
@section('title')
    {{ $title }}
@endsection

{{-- mã css --}}
@section('css')

@endsection

@section('content')
    <section class="content">
        <table class="table">
            <thead>
                <th>STT</th>
                <th>ID</th>
                <th>Mã Danh Mục</th>
                <th>Tên Danh Mục</th>
                <th>Lựa chọn</th>
            </thead>
            <tbody>
                @foreach ($danhmucs as $key => $danhmuc)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$danhmuc->id}}</td>
                        <td>{{$danhmuc->ma_danh_muc}}</td>
                        <td>{{$danhmuc->ten_danh_muc}}</td>
                        <td>
                            <a href="#" class="btn btn-warning">Sửa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection

{{-- mã javascript --}}
@section('js')

@endsection