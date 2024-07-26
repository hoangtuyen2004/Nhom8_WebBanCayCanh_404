@extends('layouts.admin')
@section('title')
    Thêm mới danh mục | ADMIN
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
                            <h5>Thêm mới danh mục</h5>
                            <span>Add class of <code>.form-control</code> with
                                <code>&lt;input&gt;</code> tag</span>
                        </div>
                        <div class="card-block">
                            <form method="post" action="{{ route('danhmuc.store') }}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Mã danh mục</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('ma_danh_muc') is-invalid @enderror" name="ma_danh_muc" placeholder="Mã danh mục ...">
                                        @error('ma_danh_muc')
                                            <span class="messages text-danger">{{$message}}</span>
                                        @enderror
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tên danh mục</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('ten_danh_muc') is-invalid @enderror" name="ten_danh_muc" placeholder="Tên danh mục ...">
                                        @error('ten_danh_muc')
                                            <span class="messages text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary m-b-0">Thêm +</button>
                                        <a href="{{ route('danhmuc.index') }}" class="btn btn-danger">Quay lại</a>
                                    </div>
                                </div>
                            </form>
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
