REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('assets/plugins/jQuery/jQuery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/js/app.min.js') }}" type="text/javascript"></script>
<!-- <script type="text/javascript" src="{{ asset('/plugins/select2/select2.min.js') }}"></script> -->

<script>
	$(function () {
    $(".select2").select2();

 });
    </script>

<!--  <script>
 $("#button").click(function(){
       alert($(".select2").val());
  });
 </script> -->

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout.