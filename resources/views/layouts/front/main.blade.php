@include('layouts.front.header')

<body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">
   
    @include('layouts.front.menu')
    @yield('content')
    @include('layouts.front.footer')
