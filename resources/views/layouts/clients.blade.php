<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/corano/corano/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 09:54:00 GMT -->
<head>
    
    @include('clients.blocks.head')
    @yield('css')
</head>

<body>
    <!-- Start Header Area -->
    @include('clients.blocks.header')
    <!-- end Header Area -->


    <main>
       @yield('content')
    </main>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

    <!-- footer area start -->
    @include('clients.blocks.footer')
    <!-- footer area end -->


    <!-- JS-->
    @yield('JS')
    @include('clients.blocks.script')
    <!-- end JS-->
   
</body>


<!-- Mirrored from htmldemo.net/corano/corano/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 09:54:00 GMT -->
</html>