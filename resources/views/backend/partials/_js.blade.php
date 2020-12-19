<script src="{{asset('backend/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/vendor/js-cookie/js.cookie.js')}}"></script>
<script src="{{asset('backend/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('backend/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
<script src="{{asset('backend/vendor/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('backend/vendor/chart.js/dist/Chart.extension.js')}}"></script>
<script src="{{asset('backend/js/argon.js?v=1.1.0')}}"></script>
@stack('js-plugins')   
<script src="{{asset('backend/js/demo.min.js')}}"></script>
<script>
$('body').tooltip({selector:'[data-toggle="tooltip"]',trigger:'hover'});
</script>
@stack('scripts')