@extends('layouts.admin')
@section('title')
    {{ $title }}
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
                            <h5>Basic Table</h5>
                            <span>use class <code>table</code> inside table
                                element</span>
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
                                        <i class="feather icon-trash close-card"></i>
                                    </li>
                                    <li>
                                        <i class="feather icon-chevron-left open-card-option"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
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
