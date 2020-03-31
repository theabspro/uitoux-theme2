@extends('themes/'.$theme.'/layouts/authed')
@section('content')
    <div ng-view></div>
@endsection

@section('footer_js')

    <script type="text/javascript">
        var logged_user_permissions = [];
        @foreach(Auth::user()->perms() as $permission_name)
            logged_user_permissions.push('{{$permission_name}}');
        @endforeach
    </script>

    @include('helper-pkg::setup')
    @include('role-pkg::setup')
    @include('company-pkg::setup')
    @include('user-pkg::setup')
    @include('location-pkg::setup')
    @include('import-cron-job-pkg::setup')
    @include('entity-pkg::setup')
    @include('project-pkg::setup')
@endsection
