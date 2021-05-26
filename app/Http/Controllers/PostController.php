<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOTools;
use Jorenvh\Share\ShareFacade;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        SEOTools::setTitle('Tv´s X Tv - El primer Programa Estudiantil');
        SEOTools::setDescription('TV´S x TV es un Programa Educativo, Informativo y de Entretenimiento, con una Productora y 3 Radios ONLINE en géneros Latino, Ingles y Tropical');
        SEOTools::opengraph()->setUrl('http://tevesporteve.bolivia.bo');
        SEOTools::setCanonical('http://tevesporteve.bolivia.bo');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@tevesporteve');
        SEOTools::jsonLd()->addImage('http://tevesporteve.bolivia.bo/images/logoTvs.png');


        $posts = Post::where('status', 2)->latest('id')->take(3)->get();
        // $categories = Category::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        SEOMeta::setTitle($post->name);
        SEOMeta::setDescription($post->extract);
        SEOMeta::setCanonical('http://tevesporteve.bolivia.bo/posts/'.$post->slug);

        OpenGraph::setDescription($post->extract);
        OpenGraph::setTitle($post->name);
        OpenGraph::setUrl('http://tevesporteve.bolivia.bo/posts/'.$post->slug);
        OpenGraph::addProperty('type', 'article');
        
        if($post->iframe){
            OpenGraph::addImage('http://tevesporteve.bolivia.bo/images/logoTvs.png');
        }else{
            OpenGraph::addImage('http://tevesporteve.bolivia.bo/'.$post->image->url);
        }


        TwitterCard::setTitle($post->name);
        TwitterCard::setSite('@Tevesporteve');

        JsonLd::setTitle($post->name);
        JsonLd::setDescription($post->extract);
        if($post->iframe){
            OpenGraph::addImage('http://tevesporteve.bolivia.bo/images/logoTvs.png');
        }else{
            JsonLd::addImage('http://tevesporteve.bolivia.bo/'.$post->image->url);
        }

        $this->authorize('published', $post);
        $similares = Post::where('category_id', $post->category_id)
            ->where('status', 2)
            ->where('id', '!=', $post->id)
            ->latest('id')
            ->take(3)
            ->get();
        $categories = Category::all();
        $tags = Tag::all();
        // $share = ShareFacade::currentPage()->facebook();
        $share = ShareFacade::currentPage($post->name)
                ->facebook(['class' => 'facebook'])
                ->twitter()
                ->linkedin('Extra linkedin summary can be passed here')
                ->whatsapp();
        
        return view('posts.show', compact('post', 'similares', 'categories', 'tags', 'share'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function category(Category $category){
        $posts = Post::where('category_id', $category->id)
            ->where('status', 2)
            ->latest()
            ->paginate(5);

        return view('posts.category', compact('posts', 'category'));
    }

    public function tag(Tag $tag){
        $posts =  $tag->posts()->where('status', 2)->latest('id')->paginate(5);
        return view('posts.tag', compact('posts', 'tag'));
    }
}
