<!-- resources/views/layouts/master.blade.php -->
@include('layouts.header')
<body>

    {{-- Navigation --}}
    @include('layouts.nav') {{-- nav.blade.php --}}
{{-- 
    Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

    {{-- Optional JavaScript --}}
        <!-- Javascript files-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>

    <!-- sidebar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- carousel -->
    <script src="{{ asset('js/owl.carousel.js') }}"></script>

    <!-- fancybox from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <!-- custom JS functions -->
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }

        $("#main").click(function() {
            $("#navbarSupportedContent").toggleClass("nav-normal");
        });
    </script>
</body>
</html>

  