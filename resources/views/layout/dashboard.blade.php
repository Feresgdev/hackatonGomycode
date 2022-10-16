<!doctype html>
<html lang="en">

<head>
    @include('layout.styles')

</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

        @include('layout.sidebar')
        @include('layout.navbar')
        <div class="content-page">
            @yield('content')
        </div>
    </div>
    <!-- Wrapper End-->

    <!-- Modal list start -->

    <footer class="iq-footer">
        @include('layout.footer')
    </footer>
    @include('layout.scripts')
</body>

</html>
