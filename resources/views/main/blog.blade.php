@extends('master')

@section('title', 'Blog')
    
@section('content')
@if($section->where('section', 'page-header')->where('status',1)->first())
 <!--Start Page Header-->
 <section class="page-header">
    <div class="page-header__bg" style="background-image: url({{$section->where('section', 'page-header')->where('status',1)->first()->cover}});">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-header__wrapper">
                    <div class="page-header__content text-center">
                        <h2>Blog</h2>
                        <div class="page-header__menu">
                            <ul>
                                <li><a href="/"><i class="fas fa-home"></i></a></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Page Header-->
@endif

@if ($section->where('section','blog-posts')->where('status',1)->first())
    
<!--Start Blog One-->
<section class="blog-one">
    <div class="container">
        <div class="sec-title text-center">
            <h2 class="sec-title__title">{{$section->where('section','blog-posts')->where('status',1)->first()->title}}</h2>
            <p class="sec-title__text">{{$section->where('section','blog-posts')->where('status',1)->first()->subtitle}}</p>
        </div>
        <div class="row">
            @foreach ($posts as $post)
                <!--Start Blog One Single-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="blog-one__single">
                        <div class="blog-one__single-img">
                            <img src="{{$post->cover}}" alt="" />
                        </div>

                        <div class="blog-one__single-content">
                            <h2><a href="/blog/detail/{{$post->id}}">{{$post->title}}</a></h2>
                            <div class="line"></div>
                            <div class="text">
                                
                                <p>{{substr($post->detail, 0, 85).'...'}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Blog One Single-->
            @endforeach
        </div>
    </div>
</section>
<!--End Blog One-->
@endif

@endsection