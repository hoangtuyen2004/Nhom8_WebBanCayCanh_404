
<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <ul class="pcoded-item pcoded-left-item">
                <li class="">
                    <a href="{{ route('wp-admin') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('sanpham.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Quản lý sản phẩm</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('danhmuc.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-box"></i>
                        </span>
                        <span class="pcoded-mtext">Quản lý danh muc</span>
                    </a>
                </li>
                <li class="">
                    <a href="/admin-tai-khoans" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-gitlab"></i>
                        </span>
                        <span class="pcoded-mtext">Quản lý tài khoản</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('admin-don-hang.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-inbox"></i>
                        </span>
                        <span class="pcoded-mtext">Quản lý đơn hàng</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>