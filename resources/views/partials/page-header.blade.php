<!-- header begin -->
<header>
		<div class="container">
			<span id="menu-btn"></span>
			<div class="row">
				<div class="col-md-3">

					<!-- logo begin -->
					<div id="logo">
						<div class="inner">
							<a href="{{ route('index') }}">
								<img src="{{ asset('storage/logos/logo-small.png') }}" alt="" class="logo-1">
								<img src="{{ asset('storage/logos/logo-small.png') }}" alt="" class="logo-2">
							</a>
						</div>
					</div>
					<!-- logo close -->
				</div>

				<div class="col-md-9">
					<!-- mainmenu begin -->
					<div id="mainmenu-container">
						{{ menu('Pagina Web', 'menu_pagina') }}
					</div>
					<!-- mainmenu close -->

					<!-- social icons -->
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-rss"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-envelope-o"></i></a>
					</div>
					<!-- social icons close -->

				</div>
			</div>
		</div>
	</header>
	<!-- header close -->