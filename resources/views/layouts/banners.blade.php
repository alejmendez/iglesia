<!DOCTYPE html>
<!--[if IE 8]>    <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>    <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--><html lang="es"><!--<![endif]-->
<head>
	@include('partials.head')
</head>

<body>
	<div id="preloader"></div>
	<div id="wrapper">
		@include('partials.page-header')
		@include('partials.banner')
		<div class="clearfix"></div>

		<!-- content begin -->
        <div id="content" class="no-padding">
			@yield('content')
		</div>

		@include('partials.page-footer')
	</div>
	@include('partials.footer')
</body>
</html>