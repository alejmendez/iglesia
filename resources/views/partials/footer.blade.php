	<script type="text/javascript">
		var $url = "{{ URL::current() }}/",
			$urlApp = "{{ env('APP_URL') }}/";
	</script>

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.ui.totop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ender.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/responsiveslides.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.fitvids.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.plugin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.countdown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/countdown-custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/rev-setting-1.html') }}"></script>

	@stack('js')