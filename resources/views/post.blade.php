@extends('layouts.default')

@section('subheader')
{{ $post->title }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="blog-read">
            <div>
                <div class="info">
                    <div class="date-box">
                        <span class="day">{{ $post->created_at->day }}</span>
                        <span class="month">{{ substr($post->created_at->format('F'), 0, 3) }}</span>
                    </div>
                </div>
                <div class="preview">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="" />
                    <a href="#">
                        <h3 class="blog-title">{{ $post->title }}</h3>
                    </a>
                    {!! $post->body !!}
                </div>
                <div class="meta-info">
                    </span>
                        @foreach($post->tags as $tag)
                        <a href="{{ route('tag', ['slug' => $tag->normalized]) }}">{{ $tag->name }}</a>{{ $loop->last ? '' : ',' }}
                        @endforeach
                    <span>
                </div>
            </div>
        </div>

        <div id="blog-comment">
            <div class="fb-comments" data-href="{{ url()->current() }}" data-numposts="5"></div>
        </div>

    </div>

    <div id="sidebar" class="col-md-4">
        <div class="widget latest_news">
            <h3>Últimas Noticias</h3>
            <ul class="bloglist-small">
                @foreach($lastPosts as $post)
                <li>
                    <div class="date-box">
                        <span class="day">{{ $post->created_at->day }}</span>
                        <span class="month">{{ substr($post->created_at->format('F'), 0, 3) }}</span>
                    </div>
                    <div class="txt">
                        <h5><a href="{{ route('post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h5>
                        <div>
                            <div>{{ str_limit($post->excerpt, 80, '...') }}</div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>

        <!-- widget category -->
        <div class="widget widget_tags">
            <h3><span>Categorias</span></h3>
            <ul>
                @foreach($categorys as $category)
                <li><a href="{{ route('category', ['slug' => $category->slug]) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>

        <!-- widget tags -->
        <div class="widget widget_tags">
            <h3><span>Etiquetas Populares</span></h3>
            <ul>
                @foreach($tags as $tag => $count)
                <li><a href="{{ route('tag', ['slug' => $tag]) }}">{{ $tag }} ({{ $count }})</a></li>
                @endforeach
            </ul>
        </div>

        <!-- widget text -->
        <div class="widget widget-text">
            <h3>Nuestra dirección</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.125593051291!2d-71.25932489999998!3d-29.975820399999968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9691cb8dd5d49129%3A0x37179ac9bef05dd9!2sCondominio+Paseo+San+Carlos!5e0!3m2!1ses-419!2scl!4v1516994558594" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe>

            <address>
                <span>René Schneider 1867-1881, Coquimbo</span>
                <span><strong>Phone:</strong>+56 9 32218506</span>
                <span><strong>Email:</strong><a href="mailto:alejmendez.87@gmail.com">alejmendez.87@gmail.com</a></span>
                <span><strong>Web:</strong><a href="{{ env('APP_URL') }}">{{ env('APP_URL') }}</a></span>
            </address>
        </div>
    </div>
</div>

<div class="map">
</div>
@endsection

@push('js')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@endpush