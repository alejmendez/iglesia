@extends('layouts.banners')

@section('content')
    <h1>{{ $page->title }}</h1>

    <?php echo $page->body; ?>
@endsection