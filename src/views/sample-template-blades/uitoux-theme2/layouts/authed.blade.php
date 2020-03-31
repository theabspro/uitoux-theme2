<!DOCTYPE html>
<html dir="ltr" lang="{{ app()->getLocale() }}" ng-app="app">
    <head>
        @include($theme.'-pkg::head')
        @yield('app-head')
    </head>
    <body>
        <div class="main-wrap">
            @include('themes/'.$theme.'/includes/common/header')
            @yield('content')
        </div><!-- Main Wrap -->
        @include('themes/'.$theme.'-pkg::includes/common/footer')
        @include($theme.'-pkg::js')
        @yield('footer_js')
    </body>

</html>

