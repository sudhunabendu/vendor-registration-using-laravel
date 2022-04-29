<script src="{{URL::asset('public/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{URL::asset('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/sparklines/sparkline.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{URL::asset('public/assets/dist/js/adminlte.js')}}"></script>
<!-- <script src="{{URL::asset('public/assets/dist/js/demo.js')}}"></script> -->
<script src="{{URL::asset('public/assets/dist/js/pages/dashboard.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{URL::asset('public/assets/dist/js/custom.js')}}"></script>
<script>
  setTimeout(function(){
    $('#alert').slideUp();
  },4000);
</script>

<script>
        $(document).ready(function() {
            $("#frm").validate({
                rules: {
                    txtPassword : {
                    minlength : 5
                },
                password_confirmation : {
                    minlength : 5,
                    equalTo : "#password"
                },
                    txtFullName: "required",
                    txtEmail:"required",
                    txtPhone: "required",
                    message: "required",
                    txtPassword:"required",
                    specialisation:"required",
                    subject:"required",
                    fee:"required",
                    // password_confirmation:"required",
                }
            });
        });
    </script>