<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="resources\css\app.css">
    @yield('css')
</head>
<body style="background :#e4e2e2;">
    <header >
        @include('admins.blocks.header')
    </header>

    <main class="container-fluid">
        <div class="row"  >
            <aside class="col-2" style="margin:0; padding :0 ; box-sizing:border-box">
                @include('admins.blocks.sidebar')
            </aside>
            <div class=" col-10 my-2" >
                @yield('content')
            </div>
        </div>
    </main>
    
    <footer>
        @include('admins.blocks.footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    @yield('js')
    <!-- Các script -->
</body>
   
</html>