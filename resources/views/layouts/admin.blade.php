<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('admins.blocks.head')
    @yield('css')
</head>
<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            {{-- HEADER --}}
           @include('admins.blocks.header')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    {{-- SIDEBAR --}}
                    @include('admins.blocks.sidebar')
                    <div class="pcoded-content">
                        {{-- CONTENT --}}
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- SCRIPT --}}
    @include('admins.blocks.javascript')
    @yield('js')
</body>


</html>