<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" href="{{ asset('public/themes/'.$theme.'/favicon.ico') }}" type="image/x-icon"/>
<link rel="shortcut icon" href="{{ asset('public/themes/'.$theme.'/favicon.ico') }}" type="image/x-icon"/>

<title>@yield('browser_title') <%title%> | {{ Session::get('browser_title')}}</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- -------- -->
<!-- Plugin CSS -->
<!-- -------- -->
<!-- Notify -->
<link href="{{ asset('public/vendor/noty/css/noty.css') }}" rel="stylesheet" type="text/css" />
<!-- Daterange Picker -->
<link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/daterangepicker.min.css') }}">
<!-- JQuery UI -->
<link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/jquery-ui/css/jquery-ui.min.css') }}">

<!-- Theme CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('public/themes/'.$theme.'/less/theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/themes/'.$theme.'/less/responsive.css') }}">
<link href="{{ asset('public/themes/'.$theme.'/css/custom.css') }}" rel="stylesheet" type="text/css" />
<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('public/themes/'.$theme.'/css/custom.css') }}">

<style>
body.modal-open .dataTables_wrapper,body.modal-open header,
body.modal-open .content-wrap,
body.modal-open .footer{
    -webkit-filter: blur(5px);
    -moz-filter: blur(5px);
    -o-filter: blur(5px);
    -ms-filter: blur(5px);
    filter: blur(5px);
    filter: url("https://gist.githubusercontent.com/amitabhaghosh197/b7865b409e835b5a43b5/raw/1a255b551091924971e7dee8935fd38a7fdf7311/blur".svg#blur);
    filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius='5');
}
</style>



