@extends('layouts.app')

@section('content')
    <!-- NEWS -->
    <div class="album-news wow fadeInUp" data-wow-duration=".7s">
        <div class="container">
            <div class="content-head text-center">
                <span>Categoria:</span>{{ $category->name }}
            </div>
            @foreach ($posts as $post)
            <article>
                <div class="col-md-6">
                    @if ($post->iframe)

                            {!! $post->iframe !!}

                    @else
                        <a href="{{ route('posts.show', $post) }}">
                            <div class="podcast-thumb">
                                <img src="{{ Storage::url($post->image->url) }}" class="img-responsive" alt="" />
                                <div class="podcast-date">{{ $post->created_at->isoFormat('MMMM') }}<br />{{ $post->created_at->isoFormat('D') }}</div>
                            </div>
                        </a>
                    @endif

                </div>
                <div class="col-md-6 news-excerpt">
                    <div class="news-meta">
                        <span><a href="{{ route('posts.category', $post->category) }}">{{ $post->category->name }}</a></span> |
                        <span>Por: {{ $post->user->name }}</span>
                    </div>
                    <h4>
                        <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
                    </h4>
                    <p>
                        {{ $post->extract }}
                    </p>
                    <a href="{{ route('posts.show', $post) }}" class="btn">Leer más</a>
                    <div style="margin-top: 25px">
                        @foreach ( $post->tags  as $tag)
                            <a href="{{ route('posts.tag', $tag) }}" class="btn btn-xs btn-{{ $tag->color }} text-white">{{ $tag->name }}</a>
                        @endforeach
                    </div>


                </div>

            </article>
            @endforeach
            <div class="text-center">
                {{ $posts->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection

{{-- <x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-center text-3xl font-bold">Categoria: {{ $category->name }}</h1>
        @foreach ($posts as $post)
            <x-card-post :post="$post">

            </x-card-post>
        @endforeach
        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout> --}}
