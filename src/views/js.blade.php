@if(config('uitoux-theme2-pkg.DEV'))
    <?php $uitoux_theme2_pkg_prefix = '/packages/abs/uitoux-theme2-pkg/src/';?>
    <?php $helper_pkg_prefix = '/packages/abs/helper-pkg/src/';?>
@else
    <?php $uitoux_theme2_pkg_prefix = '';?>
    <?php $helper_pkg_prefix = '';?>
@endif

<script src="{{ asset('public/vendor/jquery.min.js')}}"></script>
<script src="{{ asset('public/vendor/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/vendor/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/vendor/noty/js/noty.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/vendor/jquery-ui/js/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('public/vendor/bootstrap.min.js')}}"></script>

<script src="{{ URL::asset('public/vendor/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ URL::asset('public/vendor/moment.js')}}"></script>
<script src="{{ URL::asset('public/vendor/daterangepicker.min.js')}}"></script>
<script>less = { env: 'production'};</script>
<script src="{{ URL::asset('public/vendor/jquery.appear.min.js')}}"></script>
<script src="{{ URL::asset('public/vendor/jquery.easing.min.js')}}"></script>
<script src="{{ URL::asset('public/vendor/pace.min.js')}}"></script>
<script src="{{ URL::asset('public/vendor/isotope.js')}}"></script>
<script src="{{ URL::asset('public/vendor/select2.min.js')}}"></script>
<script src="{{ URL::asset('public/vendor/bootstrap-multiselect.js')}}"></script>
<script src="{{ URL::asset('public/vendor/datatables.min.js')}}"></script>
<script src="{{ URL::asset('public/vendor/datatables.fixedheader.min.js')}}"></script>
<script src="{{ URL::asset('public/vendor/bootstrap-datetimepicker.min.js')}}"></script>
<!-- Fancy Box Plugins -->
<script src="{{ URL::asset('public/vendor/jquery.fancybox.min.js')}}"></script>
<!-- File Upload Plugins -->
<script src="{{ URL::asset('public/vendor/fileinput.js')}}"></script>
@include('helper-pkg::angular-js/js')

@include('helper-pkg::angular-js-plugins/tiny-color/js')
@include('helper-pkg::angular-js-plugins/ruhley-angular-color-picker/js')

<!-- AngularJS Drag and Dop -->
<script src="{{ URL::asset('public/vendor/angular-drag-and-drop-lists-master/angular-drag-and-drop-lists.min.js')}}"></script>

{{-- Bootstrap Autohide Navebar --}}

<script src="{{ URL::asset($helper_pkg_prefix.'public/plugins/bootstrap-autohidingnavbar/dist/jquery.bootstrap-autohidingnavbar.min.js')}}"></script>
@include('helper-pkg::setup')

<script type="text/javascript">
    {{-- AngularJS Provider Dependancy Injections --}}
    angular.module('app').requires.push('dndLists');
    angular.module('app').requires.push('color.picker');

    var color_picker_options = {
        required: true,
        allowEmpty: false,
        format: 'rgb',
        alpha: false,
        swatch: true,
        swatchBootstrap: true,
        swatchOnly: true,
        show: {
            swatch: true,
            focus: true,
        },
        hide: {
            blur: true,
            escape: true,
            click: true,
        },
    };

$(document).ready(function(){
  var current = $(location).attr('pathname');
  $('#bs-example-navbar-collapse-1 > ul li a').each(function(){
      var $this = $(this);
      var split_var = current.split("/")[2];
      if(split_var=="masters"){
          $('#bs-example-navbar-collapse-1 > ul li').removeClass('active');
          $("#bs-example-navbar-collapse-1 > ul .master_link").addClass('active');
      }
      else if(split_var=="transactions"){
          $('#bs-example-navbar-collapse-1 > ul li').removeClass('active');
          $("#bs-example-navbar-collapse-1 > ul .transaction_link").addClass('active');
      }
      else if(split_var=="filelog"){
          $('#bs-example-navbar-collapse-1 > ul li').removeClass('active');
          $("#bs-example-navbar-collapse-1 > ul .file_link").addClass('active');
      }
      // if the current path is like this link, make it active
      else{
          if($this.attr('href').indexOf(current) !== -1){
              $this.addClass('active');
              var parent = $(this).parents('li');
              $("#bs-example-navbar-collapse-1 li").removeClass('active');
              $(parent).addClass('active');
          }
      }
  });
});
</script>

<script src="{{ asset($uitoux_theme2_pkg_prefix.'public/themes/'.$theme.'/js/theme.js')}}"></script>
<script src="{{ asset($uitoux_theme2_pkg_prefix.'public/themes/'.$theme.'/js/common.js')}}"></script>
