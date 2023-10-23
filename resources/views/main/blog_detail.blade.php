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
                        <h2>{{$post->title}}</h2>
                        <div class="page-header__menu">
                            <ul>
                                <li><a href="/"><i class="fas fa-home"></i></a></li>
                                <li><a href="/blog">Blog</a></li>
                                <li>{{$post->title}}</li>
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


<!--Start Blog Single-->
<section class="blog-single">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-single__left">
                    <!--Start Blog One Single-->
                    <div class="blog-one__single">
                        <div class="blog-one__single-img">
                            <img src="{{$post->cover}}" alt="" />
                        </div>

                        <div class="blog-one__single-content">

                            <div class="blog-one__single-content-meta-box">
                                <ul class="list-unstyled">
                                    

                                    <li>
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-calendar"></span>
                                            </div>
                                            <div class="text">
                                                <a href="#">{{$post->updated_at}}</a>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                                
                            </div>

                            
                            <h2>{{$post->title}}</h2>
                            <div class="line"></div>
                            
                            <div class="blog-single__text1">
                               {!! $post->detail !!}
                            </div>

                            

                            

                            

                            
                        </div>
                    </div>
                    <!--End Blog One Single-->

                    <div class="author">
                        <div class="author__img">
                            <img src="assets/images/blog/author-img.jpg" alt="">
                        </div>
                        <div class="author__content">
                            <h4>{{$system->site_name}}</h4>
                            <p>
                                {{$system->about}}
                            </p>
                            
                        </div>
                    </div>

                    <div class="back-news">
                        <div class="back-news__left">
                            <div class="back-news__arrow">
                                <a href="/blog/detail/{{$previousPost->id}}"><span class="icon-left-arrow"></span></a>
                            </div>
                            <div class="back-news__content">
                                <p>{{$previousPost->title}}</p>
                            </div>
                        </div>
                        <div class="back-news__right">
                            <div class="back-news__content">
                                <p>{{$nextPost->title}}</p>
                            </div>
                            <div class="back-news__arrow">
                                <a href="/blog/detail/{{$nextPost->id}}"><span class="icon-next"></span></a>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>

            <!--Start Sidebar-->
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    

                    

                    

                    

                    <div class="sidebar__single sidebar__sign-up wow animated fadeInUp" data-wow-delay="0.5s">
                        <div class="sidebar__sign-up-box"
                            style="background-image: url(assets/images/resources/sidebar__sign-up-bg.jpg);">
                            <div class="sidebar__sign-up-box-inner text-center">
                                <p>Whant to be notified about new post and news ? Subscribe For a Newsletter.
                                </p>
                                <div class="btn-box">
                                    <a href="#" class="thm-btn">Sign up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Sidebar-->
        </div>
    </div>
</section>
<!--End Blog Single-->
@endsection