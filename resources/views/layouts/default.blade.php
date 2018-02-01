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
		<!-- subheader begin -->
        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>
							@yield('subheader')
						</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

		<div class="clearfix"></div>
		@yield('precontent')

		<!-- content begin -->
        <div id="content">
            <div class="container">
				@yield('content')
			</div>
		</div>

		@include('partials.page-footer')
	</div>
	@include('partials.footer')
</body>
</html>