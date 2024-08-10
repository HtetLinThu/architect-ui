<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title') • {{ config('app.name') }}</title>

    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="robots" content="all,follow">
    <meta name="author" content="Admin Panel">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme" content="{{ request('theme') }}">

    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    {{-- Perfect Scrollbar --}}
    <link rel="stylesheet" href="{{ asset('assets/css/perfect-scrollbar.css') }}">

</head>

<body>
    <div id="pageloader">
        <img src="{{ asset('backend/img/loader.gif') }}" alt="processing..." />
    </div>

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('backend.layout._partials.header')

        <div class="app-main">
            @include('backend.layout._partials.sidebar')

            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content')
                </div>

                @include('backend.layout._partials.footer')
            </div>
        </div>
    </div>

    @include('backend.layout._partials.loading')
</body>

<!-- BEGIN: JS Assets-->
@include('backend.layout._partials.scripts')
<!-- END: JS Assets-->

<!-- Toast Messages -->
@include('backend.layout.toast_messages')
<!-- END: Toast Messages -->

@yield('script')
@stack('script')

</html>