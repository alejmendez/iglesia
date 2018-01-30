@extends('layouts.banners')

@section('content')
    @if ($eventos->count() > 0)
    <!-- section events begin -->
    <section id="page-events" class="no-padding">
        <div class="fullwidth">
            <div class="one-fourth text-center">
                <div class="title-area wow slideInLeft">
                    <span>Próximos</span>
                    <h1>Eventos</h1>
                </div>
            </div>

            <div class="three-fourth">
                <div class="fx custom-carousel-1">
                    @foreach($eventos as $evento)
                    <div class="item">
                        <div class="overlay">
                            <span class="time">{{ $evento->created_at }}</span>
                            <a href="#">
                                <h3>{{ $evento->titulo }}</h3>
                            </a>
                            <span class="desc">{{ $evento->resumen }}</span>
                        </div>
                        <img src="{{ asset('storage/' . $evento->imagen) }}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
    <!-- section events close -->
    @endif

    <!-- section countdown begin -->
    <section id="countdown-container" data-speed="5" data-type="background">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 wow fadeInLeft">
                    <h3>TRANSFORMANDO EN VIVO, RESTAURANDO LA ESPERANZA</h3>
                    <span class="time">April 10, 2019 8:00 pm</span>
                </div>

                <div class="col-md-6 wow fadeInRight" data-wow-delay=".25s">
                    <div id="defaultCountdown"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section countdown close -->

    <!-- section begin -->
    <section id="section-text-2" class="no-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInLeft" data-wow-delay=".5s">
                    <h1>Llevame a la Iglesia
                        </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                    </p>

                    <p class="wow fadeIn" data-wow-delay='1.5s'>
                        <img src="img/misc/pic-5.png" alt="">
                    </p>

                </div>

                <div class="col-md-6 wow fadeInUp">
                    <img src="img/misc/pic-4.png" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section blog begin -->
    <section id="page-blog" class="no-padding">
        <div class="fullwidth">
            <div class="one-fourth text-center">
                <div class="title-area wow slideInLeft">
                    <span>Últimas</span>
                    <h1>Noticias</h1>
                </div>
            </div>

            <div class="three-fourth">
                <div class="custom-carousel-2">
                    @foreach($posts as $post)
                        <div class="item-blog">
                            <div class="inner">
                                <span class="date">{{ $post->create_at }}</span>
                                <a href="{{ route('post', ['slug' => $post->slug]) }}">
                                    <h3>{{ $post->title }}</h3>
                                </a>
                                <span class="desc">{{ $post->excerpt }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
    <!-- section blog close -->

    <!-- section begin -->
    <section id="section-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="testi-carousel" class="testi-slider text-center wow fadeInUp">
                        @foreach($testimonios as $testimonio)
                            <div class="item">
                                <img src="{{ asset('storage/' . $testimonio->imagen) }}" alt="" class="img-circle">
                                <blockquote>{{ $testimonio->testimonio }}</blockquote>
                                <span class="testi-by">{{ $testimonio->nombre }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
