@if(config('uitoux-theme2-pkg.DEV'))
    <?php $uitoux_theme2_pkg_prefix = '/packages/abs/uitoux-theme2-pkg/src/';?>
@else
    <?php $uitoux_theme2_pkg_prefix = '';?>
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


<script type="text/javascript">
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
