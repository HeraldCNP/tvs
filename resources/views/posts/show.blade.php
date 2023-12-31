@extends('layouts.app')

@section('content')
    <!-- SINGLE NEWS -->
    <div class="single-video single-news wow fadeInUp" data-wow-duration="1s">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="single-video-content">
                        <h3>{{ $post->name }}</h3>
                        <div class="single-meta pull-left"><span>{{ $post->category->name }}</span> | <span>By:
                                {{ $post->user->name }}</span> | <span>{{ $post->created_at->isoFormat('LL') }}</span></div>
                        <div class="sharing pull-right"><img src="images/icon/sharing.png" alt="" /></div>
                        <div class="clearfix"></div>
                        <div class="single-thumb space30">
                            @if ($post->iframe)
                                <div class="text-center" style="width=100%">
                                    <div class="mydiv">
                                        {!! $post->iframe !!}
                                    </div>
                                </div>
                            @else
                                <img src="{{ Storage::url($post->image->url) }}" class="img-responsive center-block"
                                    alt="{{ $post->extract }}" />
                                    
                                    
                            @endif
                        </div>
                        <p>{!! $post->body !!}</p>
                        <div class="space40"></div>
                        {{-- <p>Nulla porttitor accumsan tincidunt. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit.</p> --}}
                        {{-- <blockquote>
                            "There is precious little hope to be got out of whatever keeps sustrious, but there is a chance for us whenever we cease work and become stargazers"
                            <cite>-H.M. Tomlinson</cite>
                        </blockquote> --}}
                        {{-- <div class="blog-comments">
                            <h5>3 Comments</h5>
                            <ul>
                                <li>
                                    <div class="avatar pull-left"><img src="images/other/avatar.jpg" alt=""/></div>
                                    <div class="comment-content">
                                        <div class="comment-title">Jason Doe <span class="reply"><a href="#">Replay</a></span></div>
                                        <div class="comment-date">2015. May.20</div>
                                        <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully r it and seemed ready to slide off any m</p>
                                    </div>
                                </li>
                                <li class="sub-comment">
                                    <div class="avatar pull-left"><img src="images/other/avatar.jpg" alt=""/></div>
                                    <div class="comment-content">
                                        <div class="comment-title">Jason Doe <span class="reply"><a href="#">Replay</a></span></div>
                                        <div class="comment-date">2015. May.20</div>
                                        <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully r it and seemed ready to slide off any m</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="avatar pull-left"><img src="images/other/avatar.jpg" alt=""/></div>
                                    <div class="comment-content">
                                        <div class="comment-title">Jason Doe <span class="reply"><a href="#">Replay</a></span></div>
                                        <div class="comment-date">2015. May.20</div>
                                        <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully r it and seemed ready to slide off any m</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-comment-form">
                            <h5>Leave a comment</h5>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                </div>
                                <textarea placeholder="Message"></textarea>
                                <button class="bttn" type="submit">Submit</button>
                            </form>
                        </div> --}}
                    </div>
                    {!! $share !!}
                </div>
                <div class="col-md-3 news-aside">
                    <div class="side-widget side-widget-gallery">
                        <h5>Publicidad</h5>
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <ins class="adsbygoogle" style="display:block" data-ad-format="fluid"
                            data-ad-layout-key="-6t+ed+2i-1n-4w" data-ad-client="ca-pub-7125877501142047"
                            data-ad-slot="4390213254"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                    <div class="side-widget side-widget-news">
                        <h5>Ultimas</h5>
                        <ul class="widget-news">
                            
                            @foreach ($similares as $similar)
                                <li style="margin-bottom: 15px">
                                    <a class="flex" href="{{ route('posts.show', $similar) }}">
                                        @if ($similar->image)
                                            <img class="img-rounded img-responsive"
                                                src="{{ Storage::url($similar->image->url) }}" alt="">
                                        @else
                                            <img class="w-32 object-cover object-center"
                                                src="https://cdn.pixabay.com/photo/2020/01/03/11/44/freedom-4737919_960_720.jpg"
                                                alt="">
                                        @endif
                                        <span>{{ $similar->name }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="side-widget side-widget-cat">
                        <h5>Categorias</h5>
                        <ul class="widget-cat">
                            @foreach ($categories as $category)
                                <li><a href="{{ route('posts.category', $category) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="side-widget side-widget-cat">
                        <h5>Etiquetas</h5>
                        <ul class="widget-tags">
                            @foreach ($tags as $tag)
                                <li>| <a href="{{ route('posts.tag', $tag) }}">{{ $tag->name }}</a> |</li>
                            @endforeach

                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
{{--
<x-app-layout>
    <div class="container py-8 ">
        <h1 class="text-4xl font-bold text-gray-600">{{ $post->name }}</h1>
        <div class="text-lg text-gray-500 mb-2">
            {!! $post->extract !!}
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">


                @if ($post->image)
                <figure>
                    <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">
                </figure>
                @else
                <figure>
                    <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/01/03/11/44/freedom-4737919_960_720.jpg" alt="">
                </figure>
                @endif
                <div class="text-base text-gray-500 mt-4">
                    {!! $post->body !!}
                </div>
            </div>
            <aside>

                <h1 class="text-2xl font-bold text-gray-600 mb-4">Mas en {{ $post->category->name }}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{ route('posts.show', $similar) }}">
                                @if ($post->image)
                                    <img class="w-32 object-cover object-center" src="{{ Storage::url($similar->image->url) }}" alt="">
                                @else
                                <img class="w-32 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/01/03/11/44/freedom-4737919_960_720.jpg" alt="">
                                @endif
                                <span class="ml-2">{{ $similar->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>
--}}
