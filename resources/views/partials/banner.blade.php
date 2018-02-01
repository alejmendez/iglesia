	<!-- slider -->
	<div id="slider">
		<!-- revolution slider begin -->
		<div class="fullwidthbanner-container">
			<div id="revolution-slider">
				<ul>
					@foreach(App\Banner::all() as $banner)
					<li data-transition="fade" data-slotamount="10" data-masterspeed="1500">
						<!--  BACKGROUND IMAGE -->
						<img src="{{ asset('storage/' . $banner->imagen) }}" alt="">
						@if ($banner->direccion == 'der')
						<div class="tp-caption border-v lft"
							data-x="540"
							data-y="center"
							data-speed="800"
							data-start="400"
							data-easing="easeInOutCubic"
							data-endspeed="300">
						</div>

						<div class="tp-caption custom-font-1 lft"
							data-x="600"
							data-y="140"
							data-speed="800"
							data-start="1000"
							data-easing="easeInOutCubic"
							data-endspeed="300">
							{{ $banner->titulo }}
						</div>

						<div class="tp-caption lft custom-font-2"
							data-x="600"
							data-y="190"
							data-speed="800"
							data-start="800"
							data-easing="easeInOutCubic">
							{{ $banner->subtitulo }}
						</div>

						<div class="tp-caption sfb text-left"
							data-x="600"
							data-y="240"
							data-speed="800"
							data-start="1400"
							data-easing="easeInOutCubic">
							{!! str_replace("\n", "<br>", $banner->descripcion) !!}
						</div>
						@else
						<div class="tp-caption custom-font-1 lft"
							data-x="left"
							data-y="140"
							data-speed="800"
							data-start="400"
							data-easing="easeInOutCubic"
							data-endspeed="300">
							{{ $banner->titulo }}
						</div>

						<div class="tp-caption sfr custom-font-2"
							data-x="left"
							data-y="190"
							data-speed="800"
							data-start="800"
							data-easing="easeInOutCubic">
							{{ $banner->subtitulo }}
						</div>

						<div class="tp-caption sfb text-left"
							data-x="left"
							data-y="240"
							data-speed="800"
							data-start="1200"
							data-easing="easeInOutCubic">
							{!! str_replace("\n", "<br>", $banner->descripcion) !!}
						</div>
						@endif
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<!-- revolution slider close -->
	</div>
	<!-- slider close -->