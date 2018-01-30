@extends('layouts.default')

@section('subheader')
Noticias
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <ul class="blog-list">
            @forelse ($posts as $post)
            <li>
                <div class="info">
                    <div class="date-box">
                        <span class="day">{{ $post->created_at->day }}</span>
                        <span class="month">{{ substr($post->created_at->format('F'), 0, 3) }}</span>
                    </div>
                </div>
                <div class="preview">
                    <img src="{{ Voyager::image($post->thumbnail('cropped', 'image')) }}" alt="" />
                    <a href="{{ route('post', ['slug' => $post->slug]) }}">
                        <h3 class="blog-title">{{ $post->title }}</h3>
                    </a>
                    {{ str_limit($post->excerpt, 150, '...') }}
                </div>
                <div class="meta-info">
                    </span>
                        @foreach($post->tags as $tag)
                        <a href="{{ route('tag', ['slug' => $tag->normalized]) }}">{{ $tag->name }}</a>{{ $loop->last ? '' : ',' }}
                        @endforeach
                    <span>
                </div>
            </li>
            @empty
            <li style="width: 100%;">
                No hay resultados en su busqueda
            </li>
            @endforelse
        </ul>

        <div class="clearfix"></div>

        <div class="text-center ">
            {!! $posts->links() !!}
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
            <h3><span>Etiquetas</span></h3>
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
@endsection
