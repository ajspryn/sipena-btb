
@include('layouts.dashboard.head')
    <body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">
        @include('layouts.dashboard.mobile_menu')
        <div class="flex mt-[4.7rem] md:mt-0 overflow-hidden">
            @include('layouts.dashboard.sidebar')
            @yield('content')
        </div>

        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>
