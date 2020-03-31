@if(config('uitoux-theme2-pkg.DEV'))
    <?php $uitoux_theme2_pkg_prefix = '/packages/abs/uitoux-theme2-pkg/src';?>
@else
    <?php $uitoux_theme2_pkg_prefix = '';?>
@endif

<script type="text/javascript">
	app.config(['$routeProvider', function($routeProvider) {

	    $routeProvider.
	    when('/', {
	        template: '<home></home>',
	        title: 'Theme Home',
	    }).
	    when('/login', {
	        template: '<login></login>',
	        title: 'Login',
	    }).
	    when('/forgot-password', {
	        template: '<forgot-password></forgot-password>',
	        title: 'Forgot Password',
	    }).
	    when('/reset-password', {
	        template: '<reset-password></reset-password>',
	        title: 'Reset Password',
	    });
	}]);

    var uitoux_theme2_home_template_url = "{{asset($uitoux_theme2_pkg_prefix.'/public/themes/'.$theme.'/static-pages/home.html')}}";
    var uitoux_theme2_login_template_url = "{{asset($uitoux_theme2_pkg_prefix.'/public/themes/'.$theme.'/static-pages/auth/login.html')}}";
</script>
<script type="text/javascript" src="{{asset($uitoux_theme2_pkg_prefix.'/public/themes/'.$theme.'/static-pages/controller.js')}}"></script>
