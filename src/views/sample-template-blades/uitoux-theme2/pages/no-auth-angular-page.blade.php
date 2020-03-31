@extends($theme.'-pkg::layouts/no-auth')
@section('app-head')
    @include('helper-pkg::angular-js/css')
@endsection

@section('content')
    <div ng-view></div>
@endsection

@section('footer_js')
    @include('helper-pkg::angular-js/js')
    <script type="text/javascript">
        var laravel_routes = [];
        @foreach(Route::getRoutes()->getRoutesByName() as $route_name => $route)
            laravel_routes['{{$route_name}}'] = '{{$route->uri}}';
        @endforeach
    </script>
    @include('helper-pkg::setup')
    @include('auth-pkg::setup')
@endsection
