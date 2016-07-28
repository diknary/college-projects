REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('assets/plugins/jQuery/jQuery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- Select2 -->
<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/js/app.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/plugins/chartjs/Chart.js') }}" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="{{ asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/js/myscript.js') }}" type="text/javascript"></script>

<script>
	$(function () {
    $(".select2").select2();

 });
    </script>
<script>
jQuery(document).ready(function($) {
    $(".pointer").click(function() {
        window.document.location = $(this).data("href");
    });
});
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout.
