<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('backend_assets/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('backend_assets/assets/img/favicon.png')}}">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="{{asset('backend_assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('backend_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend_assets/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('backend_assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend_assets/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
{{View::make('backend.header')}}
{{View::make('backend.sidebar')}}
     @yield('content')
{{View::make('backend.footer')}}
</div>
<script src="{{asset('backend_assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('backend_assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('backend_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend_assets/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('backend_assets/dist/js/demo.js')}}"></script>
<script src="{{asset('backend_assets/plugins/select2/js/select2.full.min.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('backend_assets/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('backend_assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('backend_assets/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('backend_assets/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('backend_assets/plugins/chart.js/Chart.min.js')}}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{asset('backend_assets/dist/js/pages/dashboard2.js')}}"></script>
<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      // //Datemask dd/mm/yyyy
      // $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      // //Datemask2 mm/dd/yyyy
      // $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      // //Money Euro
      // $('[data-mask]').inputmask()

      // //Date range picker
      // $('#reservationdate').datetimepicker({
      //   format: 'L'
      // });
      // //Date range picker
      // $('#reservation').daterangepicker()
      // //Date range picker with time picker
      // $('#reservationtime').daterangepicker({
      //   timePicker: true,
      //   timePickerIncrement: 30,
      //   locale: {
      //     format: 'MM/DD/YYYY hh:mm A'
      //   }
      // })
      // //Date range as a button
      // $('#daterange-btn').daterangepicker(
      //   {
      //     ranges: {
      //       'Today': [moment(), moment()],
      //       'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      //       'Last 7 Days': [moment().subtract(6, 'days'), moment()],
      //       'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      //       'This Month': [moment().startOf('month'), moment().endOf('month')],
      //       'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      //     },
      //     startDate: moment().subtract(29, 'days'),
      //     endDate: moment()
      //   },
      //   function (start, end) {
      //     $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      //   }
      // )

      // //Timepicker
      // $('#timepicker').datetimepicker({
      //   format: 'LT'
      // })

      // //Bootstrap Duallistbox
      // $('.duallistbox').bootstrapDualListbox()

      // //Colorpicker
      // $('.my-colorpicker1').colorpicker()
      // //color picker with addon
      // $('.my-colorpicker2').colorpicker()

      // $('.my-colorpicker2').on('colorpickerChange', function (event) {
      //   $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      // });

      // $("input[data-bootstrap-switch]").each(function () {
      //   $(this).bootstrapSwitch('state', $(this).prop('checked'));
      // });

    })
  </script>
</body>
</html>