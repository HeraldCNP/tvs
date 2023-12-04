@extends('layouts.app')

@section('content')
    <!-- NEWS -->
    <div class="album-news wow fadeInUp" data-wow-duration=".7s">
        <div class="container">
            <div class="content-head text-center">
                <span>Consulta las últimas novedades</span>Ultimas Novedades
            </div>
            @foreach ($posts as $post)
                <article>
                    <div class="col-md-6">
                        @if ($post->iframe)
                            <div class="text-center" style="width=100%">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{!! $post->iframe !!}"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        @else
                            <a href="{{ route('posts.show', $post) }}">
                                <div class="podcast-thumb">
                                    <img src="{{ Storage::url($post->image->url) }}" class="img-responsive"
                                        alt="" />
                                    <div class="podcast-date">
                                        {{ $post->created_at->isoFormat('MMMM') }}<br />{{ $post->created_at->isoFormat('D') }}
                                    </div>
                                </div>
                            </a>
                        @endif

                    </div>
                    <div class="col-md-6 news-excerpt">
                        <div class="news-meta">
                            <span><a
                                    href="{{ route('posts.category', $post->category) }}">{{ $post->category->name }}</a></span>
                            |
                            <span>Por: {{ $post->user->name }}</span>
                        </div>
                        <h4>
                            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
                        </h4>
                        <p>
                            {!! $post->extract !!}
                        </p>
                        <a href="{{ route('posts.show', $post) }}" class="btn">Leer más</a>
                        <div style="margin-top: 25px">
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('posts.tag', $tag) }}"
                                    class="btn btn-xs btn-{{ $tag->color }} text-white">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
@endsection


{{-- <x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center @if ($loop->first) md:col-span-2 @endif" style="background-image: url(@if ($post->image) {{ Storage::url($post->image->url) }} @else https://cdn.pixabay.com/photo/2020/01/03/11/44/freedom-4737919_960_720.jpg @endif)">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('posts.tag', $tag) }}" class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                        <h1 class="text-4xl text-white leading-8 font-bold mt-2">
                            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="my-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout> --}}
